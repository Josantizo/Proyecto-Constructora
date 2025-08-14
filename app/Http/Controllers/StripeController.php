<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Stripe\Exception\ApiErrorException;
use App\Models\ServicePayment;

class StripeController extends Controller
{
    public function __construct()
    {
        Stripe::setApiKey(config('services.stripe.secret'));
    }

    public function createServicePayment(Request $request)
    {
        try {
            $request->validate([
                'service_type' => 'required|string',
                'amount' => 'required|numeric|min:1',
                'description' => 'required|string',
                'customer_name' => 'required|string',
                'customer_email' => 'required|email',
                'customer_phone' => 'nullable|string',
            ]);

            $lineItems = [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $request->service_type,
                            'description' => $request->description,
                        ],
                        'unit_amount' => (int)($request->amount * 100), // Stripe expects cents
                    ],
                    'quantity' => 1,
                ],
            ];

            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => $lineItems,
                'mode' => 'payment',
                'success_url' => route('payment.success') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('payment.cancel'),
                'customer_email' => $request->customer_email,
                'metadata' => [
                    'service_type' => $request->service_type,
                    'customer_name' => $request->customer_name,
                    'customer_email' => $request->customer_email,
                    'customer_phone' => $request->customer_phone,
                    'description' => $request->description,
                ],
            ]);

            // Crear registro de pago en la base de datos
            ServicePayment::create([
                'stripe_session_id' => $session->id,
                'service_type' => $request->service_type,
                'amount' => $request->amount,
                'currency' => 'USD',
                'description' => $request->description,
                'customer_name' => $request->customer_name,
                'customer_email' => $request->customer_email,
                'customer_phone' => $request->customer_phone,
                'status' => 'pending',
                'stripe_metadata' => [
                    'service_type' => $request->service_type,
                    'customer_name' => $request->customer_name,
                    'customer_email' => $request->customer_email,
                    'customer_phone' => $request->customer_phone,
                    'description' => $request->description,
                ],
            ]);

            return response()->json(['session_id' => $session->id]);

        } catch (ApiErrorException $e) {
            Log::error('Stripe API Error: ' . $e->getMessage());
            return response()->json(['error' => 'Payment session creation failed'], 500);
        } catch (\Exception $e) {
            Log::error('Payment Error: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }

    public function success(Request $request)
    {
        try {
            $sessionId = $request->get('session_id');
            
            if (!$sessionId) {
                return redirect()->route('home')->with('error', 'Invalid session');
            }

            $session = Session::retrieve($sessionId);
            
            if ($session->payment_status === 'paid') {
                // Actualizar el registro de pago como completado
                $payment = ServicePayment::where('stripe_session_id', $sessionId)->first();
                
                if ($payment) {
                    $payment->update([
                        'stripe_payment_intent_id' => $session->payment_intent,
                        'status' => 'completed',
                        'paid_at' => now(),
                        'payment_method' => 'card',
                    ]);
                }

                // Log successful payment
                Log::info('Service payment successful', [
                    'session_id' => $sessionId,
                    'amount' => $session->amount_total / 100,
                    'customer_email' => $session->customer_email,
                    'metadata' => $session->metadata,
                ]);
                
                return view('payment.success', [
                    'amount' => $session->amount_total / 100,
                    'service_type' => $session->metadata->service_type,
                    'customer_name' => $session->metadata->customer_name,
                ]);
            }

            return redirect()->route('home')->with('error', 'Payment was not completed');

        } catch (\Exception $e) {
            Log::error('Success page error: ' . $e->getMessage());
            return redirect()->route('home')->with('error', 'An error occurred');
        }
    }

    public function cancel()
    {
        return view('payment.cancel');
    }

    public function webhook(Request $request)
    {
        $payload = $request->getContent();
        $sigHeader = $request->header('Stripe-Signature');
        $endpointSecret = config('services.stripe.webhook.secret');

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload, $sigHeader, $endpointSecret
            );
        } catch (\UnexpectedValueException $e) {
            Log::error('Invalid payload');
            return response('Invalid payload', 400);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            Log::error('Invalid signature');
            return response('Invalid signature', 400);
        }

        switch ($event->type) {
            case 'checkout.session.completed':
                $session = $event->data->object;
                $this->handleServicePaymentCompleted($session);
                break;
            case 'payment_intent.succeeded':
                $paymentIntent = $event->data->object;
                $this->handlePaymentIntentSucceeded($paymentIntent);
                break;
            case 'payment_intent.payment_failed':
                $paymentIntent = $event->data->object;
                $this->handlePaymentIntentFailed($paymentIntent);
                break;
        }

        return response('Webhook handled', 200);
    }

    private function handleServicePaymentCompleted($session)
    {
        try {
            // Actualizar el registro de pago en la base de datos
            $payment = ServicePayment::where('stripe_session_id', $session->id)->first();
            
            if ($payment) {
                $payment->update([
                    'stripe_payment_intent_id' => $session->payment_intent,
                    'status' => 'completed',
                    'paid_at' => now(),
                    'payment_method' => 'card',
                ]);
            }

            Log::info('Service payment completed', [
                'session_id' => $session->id,
                'amount' => $session->amount_total / 100,
                'customer_email' => $session->customer_email,
                'metadata' => $session->metadata,
            ]);
        } catch (\Exception $e) {
            Log::error('Error updating payment record: ' . $e->getMessage());
        }
    }

    private function handlePaymentIntentSucceeded($paymentIntent)
    {
        Log::info('Payment intent succeeded: ' . $paymentIntent->id);
    }

    private function handlePaymentIntentFailed($paymentIntent)
    {
        try {
            // Actualizar el registro de pago como fallido
            $payment = ServicePayment::where('stripe_payment_intent_id', $paymentIntent->id)->first();
            
            if ($payment) {
                $payment->update([
                    'status' => 'failed',
                    'notes' => 'Payment failed: ' . ($paymentIntent->last_payment_error->message ?? 'Unknown error'),
                ]);
            }

            Log::error('Payment intent failed: ' . $paymentIntent->id);
        } catch (\Exception $e) {
            Log::error('Error updating failed payment record: ' . $e->getMessage());
        }
    }
}