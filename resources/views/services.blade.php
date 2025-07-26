@extends('layout')

@section('content')
<!-- Hero Section -->
<section class="py-16 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 text-red-700">Home Remodeling Services</h1>
        <p class="text-lg md:text-xl max-w-3xl mx-auto text-gray-700">Comprehensive remodeling and construction services to transform your home. From kitchen renovations to complete home makeovers, we deliver quality craftsmanship and exceptional results.</p>
    </div>
</section>

<!-- Services Grid -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Kitchen Renovation -->
            <div class="bg-gray-50 p-8 rounded-lg hover:shadow-lg transition duration-300">
                <div class="bg-red-700 text-white w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Kitchen Renovation</h3>
                <p class="text-gray-600 mb-6">Complete kitchen remodeling services including custom cabinets, granite countertops, modern appliances, and beautiful flooring. Transform your kitchen into the heart of your home.</p>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li>• Custom Cabinet Installation</li>
                    <li>• Granite & Quartz Countertops</li>
                    <li>• Modern Appliance Integration</li>
                    <li>• Kitchen Flooring & Backsplash</li>
                    <li>• Plumbing & Electrical Updates</li>
                </ul>
                <a href="/contact" class="inline-block bg-red-700 text-white px-6 py-2 rounded-lg font-semibold hover:bg-red-800 transition duration-300">Get Quote</a>
            </div>

            <!-- Bathroom Remodeling -->
            <div class="bg-gray-50 p-8 rounded-lg hover:shadow-lg transition duration-300">
                <div class="bg-red-700 text-white w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Bathroom Remodeling</h3>
                <p class="text-gray-600 mb-6">Luxurious bathroom renovations with modern fixtures, elegant tile work, and spa-like features. Create your perfect retreat with our expert bathroom remodeling services.</p>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li>• Custom Shower & Tub Installation</li>
                    <li>• Premium Tile & Stone Work</li>
                    <li>• Modern Fixtures & Hardware</li>
                    <li>• Plumbing & Electrical Upgrades</li>
                    <li>• Vanity & Storage Solutions</li>
                </ul>
                <a href="/contact" class="inline-block bg-red-700 text-white px-6 py-2 rounded-lg font-semibold hover:bg-red-800 transition duration-300">Get Quote</a>
            </div>

            <!-- Home Remodeling -->
            <div class="bg-gray-50 p-8 rounded-lg hover:shadow-lg transition duration-300">
                <div class="bg-red-700 text-white w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Home Remodeling</h3>
                <p class="text-gray-600 mb-6">Complete home transformation services including room additions, basement finishing, and whole-house renovations. Increase your home's value and functionality.</p>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li>• Room Additions & Expansions</li>
                    <li>• Basement Finishing</li>
                    <li>• Interior & Exterior Renovations</li>
                    <li>• Structural Modifications</li>
                    <li>• Energy Efficiency Upgrades</li>
                </ul>
                <a href="/contact" class="inline-block bg-red-700 text-white px-6 py-2 rounded-lg font-semibold hover:bg-red-800 transition duration-300">Get Quote</a>
            </div>

            <!-- Flooring & Painting -->
            <div class="bg-gray-50 p-8 rounded-lg hover:shadow-lg transition duration-300">
                <div class="bg-red-700 text-white w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Flooring & Painting</h3>
                <p class="text-gray-600 mb-6">Professional flooring installation and interior/exterior painting services. From hardwood floors to custom paint colors, we enhance your home's beauty.</p>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li>• Hardwood & Laminate Flooring</li>
                    <li>• Tile & Stone Installation</li>
                    <li>• Interior & Exterior Painting</li>
                    <li>• Cabinet & Furniture Refinishing</li>
                    <li>• Color Consultation</li>
                </ul>
                <a href="/contact" class="inline-block bg-red-700 text-white px-6 py-2 rounded-lg font-semibold hover:bg-red-800 transition duration-300">Get Quote</a>
            </div>

            <!-- Roofing & Siding -->
            <div class="bg-gray-50 p-8 rounded-lg hover:shadow-lg transition duration-300">
                <div class="bg-red-700 text-white w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Roofing & Siding</h3>
                <p class="text-gray-600 mb-6">Expert roofing and siding installation and repair services. Protect your home with quality materials and professional installation.</p>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li>• Roof Installation & Repair</li>
                    <li>• Siding Installation</li>
                    <li>• Gutter Systems</li>
                    <li>• Weather Protection</li>
                    <li>• Energy-Efficient Options</li>
                </ul>
                <a href="/contact" class="inline-block bg-red-700 text-white px-6 py-2 rounded-lg font-semibold hover:bg-red-800 transition duration-300">Get Quote</a>
            </div>

            <!-- Decks & Patios -->
            <div class="bg-gray-50 p-8 rounded-lg hover:shadow-lg transition duration-300">
                <div class="bg-red-700 text-white w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Decks & Patios</h3>
                <p class="text-gray-600 mb-6">Beautiful outdoor living spaces with custom deck and patio construction. Create the perfect outdoor entertainment area for your family.</p>
                <ul class="text-gray-600 space-y-2 mb-6">
                    <li>• Custom Deck Construction</li>
                    <li>• Patio Design & Installation</li>
                    <li>• Outdoor Living Spaces</li>
                    <li>• Pergolas & Gazebos</li>
                    <li>• Outdoor Kitchens</li>
                </ul>
                <a href="/contact" class="inline-block bg-red-700 text-white px-6 py-2 rounded-lg font-semibold hover:bg-red-800 transition duration-300">Get Quote</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-red-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Ready to Start Your Project?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Contact us today for a free consultation and detailed quote. Our experienced team is ready to bring your vision to life.</p>
        <a href="/contact" class="bg-white text-red-700 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">Get Free Quote</a>
    </div>
</section>
@endsection 