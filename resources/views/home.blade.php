@extends('layout')

@section('content')
<!-- Hero Section -->
<section class="py-16 min-h-[60vh] flex flex-col justify-center items-center text-center bg-gradient-to-br from-gray-50 to-white">
    <h1 class="text-4xl md:text-5xl font-bold mb-6 text-red-700">Professional Home Remodeling & Construction Services</h1>
    <p class="text-lg md:text-xl max-w-3xl mb-8 text-gray-700">Transform your space with Foursquare Remodeling LLC. Expert kitchen renovation, bathroom remodeling, and home improvement services across the United States. Quality craftsmanship, reliable service, and competitive pricing.</p>
    <div class="flex flex-col sm:flex-row gap-4">
        <a href="/contact" class="bg-red-700 text-white px-8 py-3 rounded-lg font-semibold hover:bg-red-800 transition duration-300">Get Free Quote</a>
        <a href="/services" class="border-2 border-red-700 text-red-700 px-8 py-3 rounded-lg font-semibold hover:bg-red-700 hover:text-white transition duration-300">Our Services</a>
    </div>
</section>

<!-- Services Overview -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Our Remodeling Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gray-50 p-6 rounded-lg hover:shadow-lg transition duration-300">
                <h3 class="text-xl font-semibold mb-4 text-red-700">Kitchen Renovation</h3>
                <p class="text-gray-600 mb-4">Complete kitchen remodeling including cabinets, countertops, flooring, and appliances. Modern designs that enhance functionality and value.</p>
                <a href="/services" class="text-red-700 font-semibold hover:underline">Learn More →</a>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg hover:shadow-lg transition duration-300">
                <h3 class="text-xl font-semibold mb-4 text-red-700">Bathroom Remodeling</h3>
                <p class="text-gray-600 mb-4">Full bathroom renovations with modern fixtures, tile work, plumbing, and electrical upgrades. Create your perfect spa-like retreat.</p>
                <a href="/services" class="text-red-700 font-semibold hover:underline">Learn More →</a>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg hover:shadow-lg transition duration-300">
                <h3 class="text-xl font-semibold mb-4 text-red-700">Home Improvement</h3>
                <p class="text-gray-600 mb-4">Comprehensive home improvement services including flooring, painting, roofing, siding, decks, and patio construction.</p>
                <a href="/services" class="text-red-700 font-semibold hover:underline">Learn More →</a>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Why Choose Foursquare Remodeling LLC?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="bg-red-700 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2">Quality Craftsmanship</h3>
                <p class="text-gray-600">Expert workmanship and attention to detail in every project</p>
            </div>
            <div class="text-center">
                <div class="bg-red-700 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2">On-Time Completion</h3>
                <p class="text-gray-600">We respect your time and complete projects as scheduled</p>
            </div>
            <div class="text-center">
                <div class="bg-red-700 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2">Competitive Pricing</h3>
                <p class="text-gray-600">Fair and transparent pricing for all remodeling services</p>
            </div>
            <div class="text-center">
                <div class="bg-red-700 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.25a9.75 9.75 0 109.75 9.75A9.75 9.75 0 0012 2.25z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2">Licensed & Insured</h3>
                <p class="text-gray-600">Fully licensed, bonded, and insured for your peace of mind</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-red-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Ready to Transform Your Home?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Get a free consultation and quote for your remodeling project. Our experts are ready to help you create the home of your dreams.</p>
        <a href="/contact" class="bg-white text-red-700 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">Contact Us Today</a>
    </div>
</section>
@endsection 