@extends('layout')

@section('content')
<!-- Hero Section -->
<section class="py-16 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 text-red-700">About Foursquare Remodeling LLC</h1>
        <p class="text-lg md:text-xl max-w-3xl mx-auto text-gray-700">Your trusted partner in home remodeling and construction. With years of experience and a commitment to excellence, we transform your vision into reality.</p>
    </div>
</section>

<!-- Company Story -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6 text-gray-800">Our Story</h2>
                <p class="text-gray-600 mb-6">Founded with a passion for quality craftsmanship and customer satisfaction, Foursquare Remodeling LLC has been serving homeowners across the United States for over a decade. We started as a small family business and have grown into a trusted name in the construction industry.</p>
                <p class="text-gray-600 mb-6">Our mission is simple: to deliver exceptional remodeling services that exceed expectations while maintaining the highest standards of quality, safety, and professionalism. We believe that every home deserves to be beautiful, functional, and comfortable.</p>
                <p class="text-gray-600">Today, we're proud to be one of the most reliable construction companies in the region, serving hundreds of satisfied customers with projects ranging from simple repairs to complete home transformations.</p>
            </div>
            <div class="bg-gray-100 p-8 rounded-lg">
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Why Choose Us?</h3>
                <ul class="space-y-4 text-gray-700">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-red-700 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Over 10 years of experience in construction
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-red-700 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Licensed, bonded, and fully insured
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-red-700 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Quality materials and expert craftsmanship
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
</section>

<!-- Our Values -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Our Core Values</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="bg-red-700 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2">Quality</h3>
                <p class="text-gray-600">We never compromise on quality, using only the best materials and techniques</p>
            </div>
            <div class="text-center">
                <div class="bg-red-700 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2">Integrity</h3>
                <p class="text-gray-600">Honest communication and transparent pricing in everything we do</p>
            </div>
            <div class="text-center">
                <div class="bg-red-700 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2">Reliability</h3>
                <p class="text-gray-600">We keep our promises and complete projects on time, every time</p>
            </div>
            <div class="text-center">
                <div class="bg-red-700 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2">Passion</h3>
                <p class="text-gray-600">We love what we do and it shows in every project we complete</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Our Expert Team</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="bg-gray-200 w-32 h-32 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-16 h-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">John Smith</h3>
                <p class="text-red-700 font-semibold mb-2">Founder & CEO</p>
                <p class="text-gray-600">With over 15 years in construction, John leads our team with expertise and vision.</p>
            </div>
            <div class="text-center">
                <div class="bg-gray-200 w-32 h-32 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-16 h-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Mike Johnson</h3>
                <p class="text-red-700 font-semibold mb-2">Project Manager</p>
                <p class="text-gray-600">Mike ensures every project runs smoothly and meets our high standards.</p>
            </div>
            <div class="text-center">
                <div class="bg-gray-200 w-32 h-32 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-16 h-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Sarah Davis</h3>
                <p class="text-red-700 font-semibold mb-2">Design Specialist</p>
                <p class="text-gray-600">Sarah brings creativity and innovation to every remodeling project.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-red-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Ready to Work With Us?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Join hundreds of satisfied customers who have transformed their homes with Foursquare Remodeling LLC.</p>
        <a href="/contact" class="bg-white text-red-700 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">Get Your Free Quote</a>
    </div>
</section>
@endsection 