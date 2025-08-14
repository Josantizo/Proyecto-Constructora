@extends('layout')

@section('content')
<!-- Service Payment Section -->
<section class="py-16 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Payment for Construction Services</h1>
                <p class="text-lg text-gray-600">Complete your payment for the construction services provided by Foursquare Remodeling LLC.</p>
            </div>

            <!-- Payment Form -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <form id="payment-form" class="space-y-6">
                    @csrf
                    
                    <!-- Service Type -->
                    <div>
                        <label for="service_type" class="block text-sm font-medium text-gray-700 mb-2">Service Type *</label>
                        <select id="service_type" name="service_type" required 
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-700 focus:border-transparent">
                            <option value="">Select a service</option>
                            <option value="Kitchen Renovation">Kitchen Renovation</option>
                            <option value="Bathroom Remodeling">Bathroom Remodeling</option>
                            <option value="Home Remodeling">Home Remodeling</option>
                            <option value="Flooring Installation">Flooring Installation</option>
                            <option value="Painting Services">Painting Services</option>
                            <option value="Roofing Services">Roofing Services</option>
                            <option value="Siding Installation">Siding Installation</option>
                            <option value="Deck Construction">Deck Construction</option>
                            <option value="Handyman Services">Handyman Services</option>
                            <option value="Other Construction Service">Other Construction Service</option>
                        </select>
                    </div>

                    <!-- Amount -->
                    <div>
                        <label for="amount" class="block text-sm font-medium text-gray-700 mb-2">Amount (USD) *</label>
                        <div class="relative">
                            <span class="absolute left-3 top-3 text-gray-500">$</span>
                            <input type="number" id="amount" name="amount" step="0.01" min="1" required
                                   class="w-full border border-gray-300 rounded-lg pl-8 pr-4 py-3 focus:ring-2 focus:ring-red-700 focus:border-transparent"
                                   placeholder="0.00">
                        </div>
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Service Description *</label>
                        <textarea id="description" name="description" rows="4" required
                                  class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-700 focus:border-transparent"
                                  placeholder="Please describe the services provided..."></textarea>
                    </div>

                    <!-- Customer Information -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="customer_name" class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                            <input type="text" id="customer_name" name="customer_name" required
                                   class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-700 focus:border-transparent"
                                   placeholder="Your full name">
                        </div>
                        <div>
                            <label for="customer_email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                            <input type="email" id="customer_email" name="customer_email" required
                                   class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-700 focus:border-transparent"
                                   placeholder="your.email@example.com">
                        </div>
                    </div>

                    <!-- Payment Summary -->
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold mb-4 text-gray-800">Payment Summary</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Service Type:</span>
                                <span id="summary-service" class="font-semibold">-</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Amount:</span>
                                <span id="summary-amount" class="font-semibold text-red-700">$0.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Processing Fee:</span>
                                <span id="summary-fee" class="font-semibold text-gray-600">$0.00</span>
                            </div>
                            <div class="border-t pt-3">
                                <div class="flex justify-between">
                                    <span class="text-lg font-semibold">Total:</span>
                                    <span id="summary-total" class="text-lg font-bold text-red-700">$0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" id="pay-button" 
                            class="w-full bg-red-700 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-red-800 transition duration-300 disabled:opacity-50 disabled:cursor-not-allowed">
                        Pay Now
                    </button>
                </form>
            </div>

            <!-- Information Box -->
            <div class="mt-8 bg-blue-50 border border-blue-200 rounded-lg p-6">
                <h3 class="text-lg font-semibold text-blue-800 mb-4">Important Information</h3>
                <ul class="space-y-2 text-blue-700 text-sm">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        All payments are processed securely through Stripe
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        You will receive a payment confirmation email
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        Contact us if you have any questions about your payment
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script src="https://js.stripe.com/v3/"></script>
<script>
const stripe = Stripe('{{ config("services.stripe.key") }}');

// Update summary when form changes
document.getElementById('service_type').addEventListener('change', updateSummary);
document.getElementById('amount').addEventListener('input', updateSummary);

function updateSummary() {
    const serviceType = document.getElementById('service_type').value;
    const amount = parseFloat(document.getElementById('amount').value) || 0;
    const fee = amount * 0.029 + 0.30; // Stripe fee calculation
    const total = amount + fee;

    document.getElementById('summary-service').textContent = serviceType || '-';
    document.getElementById('summary-amount').textContent = '$' + amount.toFixed(2);
    document.getElementById('summary-fee').textContent = '$' + fee.toFixed(2);
    document.getElementById('summary-total').textContent = '$' + total.toFixed(2);
}

document.getElementById('payment-form').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const button = document.getElementById('pay-button');
    const originalText = button.textContent;
    
    button.textContent = 'Processing...';
    button.disabled = true;

    try {
        const formData = new FormData(this);
        const response = await fetch('{{ route("payment.create") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                service_type: formData.get('service_type'),
                amount: parseFloat(formData.get('amount')),
                description: formData.get('description'),
                customer_name: formData.get('customer_name'),
                customer_email: formData.get('customer_email')
            })
        });

        const data = await response.json();

        if (data.error) {
            alert(data.error);
            return;
        }

        const result = await stripe.redirectToCheckout({
            sessionId: data.session_id
        });

        if (result.error) {
            alert(result.error.message);
        }

    } catch (error) {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
    } finally {
        button.textContent = originalText;
        button.disabled = false;
    }
});
</script>
@endsection 