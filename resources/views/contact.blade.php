@extends('layout')

@section('content')
<!-- Hero Section -->
<section class="py-16 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 text-red-700">Contact Foursquare Remodeling LLC</h1>
        <p class="text-lg md:text-xl max-w-3xl mx-auto text-gray-700">Get your free consultation and quote today. Our remodeling experts are ready to help you transform your home with quality craftsmanship and exceptional service.</p>
    </div>
</section>

<!-- Contact Information -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <h2 class="text-3xl font-bold mb-8 text-gray-800">Get Your Free Quote</h2>
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block mb-2 font-semibold text-gray-700">Full Name *</label>
                            <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-700 focus:border-transparent" required>
                        </div>
                        <div>
                            <label for="phone" class="block mb-2 font-semibold text-gray-700">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-700 focus:border-transparent" required>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 font-semibold text-gray-700">Email Address *</label>
                        <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-700 focus:border-transparent" required>
                    </div>
                    <div>
                        <label for="service" class="block mb-2 font-semibold text-gray-700">Service Needed</label>
                        <select id="service" name="service" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-700 focus:border-transparent">
                            <option value="">Select a service</option>
                            <option value="kitchen-renovation">Kitchen Renovation</option>
                            <option value="bathroom-remodeling">Bathroom Remodeling</option>
                            <option value="home-remodeling">Home Remodeling</option>
                            <option value="flooring-painting">Flooring & Painting</option>
                            <option value="roofing-siding">Roofing & Siding</option>
                            <option value="decks-patios">Decks & Patios</option>
                            <option value="handyman">Handyman Services</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label for="project-description" class="block mb-2 font-semibold text-gray-700">Project Description *</label>
                        <textarea id="project-description" name="project-description" rows="5" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-700 focus:border-transparent" placeholder="Please describe your project in detail..." required></textarea>
                    </div>
                    <div>
                        <label for="timeline" class="block mb-2 font-semibold text-gray-700">Preferred Timeline</label>
                        <select id="timeline" name="timeline" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-700 focus:border-transparent">
                            <option value="">Select timeline</option>
                            <option value="asap">As Soon As Possible</option>
                            <option value="1-2-weeks">1-2 Weeks</option>
                            <option value="1-month">1 Month</option>
                            <option value="2-3-months">2-3 Months</option>
                            <option value="flexible">Flexible</option>
                        </select>
                    </div>
                    <button type="submit" class="w-full bg-red-700 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-red-800 transition duration-300">Get Free Quote</button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="lg:pl-8">
                <h2 class="text-3xl font-bold mb-8 text-gray-800">Contact Information</h2>
                
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="bg-red-700 text-white w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800">Phone</h3>
                            <p class="text-gray-600 text-lg">+1 (555) 123-4567</p>
                            <p class="text-gray-500 text-sm">Monday - Friday: 8:00 AM - 6:00 PM</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="bg-red-700 text-white w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800">Email</h3>
                            <p class="text-gray-600 text-lg">info@foursquare-remodeling.com</p>
                            <p class="text-gray-500 text-sm">We respond within 24 hours</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="bg-red-700 text-white w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800">Service Area</h3>
                            <p class="text-gray-600 text-lg">United States</p>
                            <p class="text-gray-500 text-sm">Licensed and insured in all 50 states</p>
                        </div>
                    </div>
                </div>

                <!-- Why Choose Us -->
                <div class="mt-12 bg-gray-50 p-8 rounded-lg">
                    <h3 class="text-2xl font-bold mb-6 text-gray-800">Why Choose Foursquare Remodeling?</h3>
                    <ul class="space-y-4 text-gray-700">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-red-700 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Free consultation and detailed quotes
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-red-700 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Licensed, bonded, and insured
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-red-700 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Quality craftsmanship and materials
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-red-700 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            On-time project completion
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-red-700 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Competitive pricing and financing options
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 