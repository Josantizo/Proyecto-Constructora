@extends('layout')

@section('content')
<!-- Hero Section -->
<section class="py-16 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 text-red-700">Professional Handyman Services</h1>
        <p class="text-lg md:text-xl max-w-3xl mx-auto text-gray-700">Fast, reliable, and affordable handyman services for all your home repair and maintenance needs. No job is too small for our experienced team.</p>
    </div>
</section>

<!-- Services Overview -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Our Handyman Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Minor Repairs -->
            <div class="bg-gray-50 p-6 rounded-lg hover:shadow-lg transition duration-300">
                <div class="bg-red-700 text-white w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-gray-800">Minor Repairs</h3>
                <p class="text-gray-600 mb-4">Quick fixes for common household issues including leaky faucets, squeaky doors, loose handles, and more.</p>
                <ul class="text-gray-600 space-y-2">
                    <li>• Faucet & Plumbing Repairs</li>
                    <li>• Door & Window Fixes</li>
                    <li>• Cabinet & Drawer Repairs</li>
                    <li>• Electrical Outlet Issues</li>
                </ul>
            </div>

            <!-- Furniture Assembly -->
            <div class="bg-gray-50 p-6 rounded-lg hover:shadow-lg transition duration-300">
                <div class="bg-red-700 text-white w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-gray-800">Furniture Assembly</h3>
                <p class="text-gray-600 mb-4">Professional assembly of furniture, shelving units, and home organization systems.</p>
                <ul class="text-gray-600 space-y-2">
                    <li>• Bedroom Furniture</li>
                    <li>• Living Room Sets</li>
                    <li>• Office Furniture</li>
                    <li>• Storage Solutions</li>
                </ul>
            </div>

            <!-- Fixture Installation -->
            <div class="bg-gray-50 p-6 rounded-lg hover:shadow-lg transition duration-300">
                <div class="bg-red-700 text-white w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-gray-800">Fixture Installation</h3>
                <p class="text-gray-600 mb-4">Installation of various home fixtures and hardware with precision and care.</p>
                <ul class="text-gray-600 space-y-2">
                    <li>• Light Fixtures & Ceiling Fans</li>
                    <li>• Bathroom Fixtures</li>
                    <li>• Kitchen Hardware</li>
                    <li>• Security Devices</li>
                </ul>
            </div>

            <!-- Maintenance Tasks -->
            <div class="bg-gray-50 p-6 rounded-lg hover:shadow-lg transition duration-300">
                <div class="bg-red-700 text-white w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-gray-800">Maintenance Tasks</h3>
                <p class="text-gray-600 mb-4">Regular maintenance and preventive care to keep your home in top condition.</p>
                <ul class="text-gray-600 space-y-2">
                    <li>• Gutter Cleaning</li>
                    <li>• HVAC Filter Changes</li>
                    <li>• Smoke Detector Testing</li>
                    <li>• General Inspections</li>
                </ul>
            </div>

            <!-- Painting & Touch-ups -->
            <div class="bg-gray-50 p-6 rounded-lg hover:shadow-lg transition duration-300">
                <div class="bg-red-700 text-white w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-gray-800">Painting & Touch-ups</h3>
                <p class="text-gray-600 mb-4">Interior and exterior painting services, touch-ups, and color matching.</p>
                <ul class="text-gray-600 space-y-2">
                    <li>• Interior Painting</li>
                    <li>• Exterior Touch-ups</li>
                    <li>• Color Matching</li>
                    <li>• Wall Repairs</li>
                </ul>
            </div>

            <!-- Emergency Repairs -->
            <div class="bg-gray-50 p-6 rounded-lg hover:shadow-lg transition duration-300">
                <div class="bg-red-700 text-white w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-gray-800">Emergency Repairs</h3>
                <p class="text-gray-600 mb-4">24/7 emergency repair services for urgent home issues that need immediate attention.</p>
                <ul class="text-gray-600 space-y-2">
                    <li>• Water Leaks</li>
                    <li>• Electrical Issues</li>
                    <li>• Lock Problems</li>
                    <li>• Broken Windows</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Our Handyman Services -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Why Choose Our Handyman Services?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="bg-red-700 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2">Fast Response</h3>
                <p class="text-gray-600">Quick response times and flexible scheduling to fit your busy lifestyle</p>
            </div>
            <div class="text-center">
                <div class="bg-red-700 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2">Licensed & Insured</h3>
                <p class="text-gray-600">Fully licensed, bonded, and insured for your peace of mind</p>
            </div>
            <div class="text-center">
                <div class="bg-red-700 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2">Affordable Rates</h3>
                <p class="text-gray-600">Competitive pricing with no hidden fees or surprise charges</p>
            </div>
            <div class="text-center">
                <div class="bg-red-700 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.25a9.75 9.75 0 109.75 9.75A9.75 9.75 0 0012 2.25z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2">Experienced Team</h3>
                <p class="text-gray-600">Skilled professionals with years of experience in home repairs</p>
            </div>
        </div>
    </div>
</section>

<!-- Service Areas -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Service Areas</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gray-50 p-6 rounded-lg text-center">
                <h3 class="text-xl font-semibold mb-4 text-gray-800">Residential</h3>
                <p class="text-gray-600">Houses, apartments, condos, and townhomes</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg text-center">
                <h3 class="text-xl font-semibold mb-4 text-gray-800">Commercial</h3>
                <p class="text-gray-600">Small offices, retail spaces, and commercial buildings</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg text-center">
                <h3 class="text-xl font-semibold mb-4 text-gray-800">Emergency</h3>
                <p class="text-gray-600">24/7 emergency repair services available</p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Information -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Transparent Pricing</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Basic Service</h3>
                <div class="text-4xl font-bold text-red-700 mb-6">$75</div>
                <p class="text-gray-600 mb-6">per hour</p>
                <ul class="text-left space-y-3 mb-8">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-red-700 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Minor repairs
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-red-700 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Furniture assembly
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-red-700 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Basic maintenance
                    </li>
                </ul>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg text-center border-2 border-red-700">
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Standard Service</h3>
                <div class="text-4xl font-bold text-red-700 mb-6">$95</div>
                <p class="text-gray-600 mb-6">per hour</p>
                <ul class="text-left space-y-3 mb-8">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-red-700 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        All basic services
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-red-700 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Fixture installation
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-red-700 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Painting & touch-ups
                    </li>
                </ul>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Emergency Service</h3>
                <div class="text-4xl font-bold text-red-700 mb-6">$125</div>
                <p class="text-gray-600 mb-6">per hour</p>
                <ul class="text-left space-y-3 mb-8">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-red-700 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        24/7 availability
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-red-700 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Emergency repairs
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-red-700 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Priority scheduling
                    </li>
    </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-red-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Need a Handyman?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Contact us today for fast, reliable handyman services. We're here to help with all your home repair and maintenance needs.</p>
        <a href="/contact" class="bg-white text-red-700 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">Schedule Service</a>
    </div>
</section>
@endsection 