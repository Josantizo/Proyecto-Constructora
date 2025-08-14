@extends('layout')

@section('content')
<!-- Success Section -->
<section class="py-16 bg-gradient-to-br from-green-50 to-white">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto text-center">
            <!-- Success Icon -->
            <div class="bg-green-100 text-green-600 w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-8">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>

            <h1 class="text-4xl font-bold text-gray-800 mb-4">Payment Successful!</h1>
            <p class="text-xl text-gray-600 mb-8">Thank you for your payment. Your construction service payment has been processed successfully.</p>

            <!-- Payment Details -->
            @if(isset($amount) && isset($service_type) && isset($customer_name))
            <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                <h2 class="text-2xl font-semibold mb-6 text-gray-800">Payment Details</h2>
                
                <div class="space-y-4">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Service Type:</span>
                        <span class="font-semibold">{{ $service_type }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Customer Name:</span>
                        <span class="font-semibold">{{ $customer_name }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Amount Paid:</span>
                        <span class="font-semibold text-green-600">${{ number_format($amount, 2) }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Date:</span>
                        <span class="font-semibold">{{ now()->format('M d, Y') }}</span>
                    </div>
                </div>
            </div>
            @endif

            <!-- Next Steps -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-6 mb-8">
                <h3 class="text-lg font-semibold text-blue-800 mb-4">What's Next?</h3>
                <ul class="text-left space-y-3 text-blue-700">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        You'll receive a payment confirmation email shortly
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Our team will contact you to schedule your service
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Keep this confirmation for your records
                    </li>
                </ul>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/" 
                   class="bg-red-700 text-white px-8 py-3 rounded-lg font-semibold hover:bg-red-800 transition duration-300">
                    Back to Home
                </a>
                <a href="/contact" 
                   class="border-2 border-red-700 text-red-700 px-8 py-3 rounded-lg font-semibold hover:bg-red-700 hover:text-white transition duration-300">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>
@endsection 