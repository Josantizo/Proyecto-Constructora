<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @php
        $currentPage = request()->segment(1) ?: 'home';
        $seoData = App\Http\Controllers\SeoController::getSeoData($currentPage);
    @endphp
    
    <!-- Primary Meta Tags -->
    <title>{{ $seoData['title'] }}</title>
    <meta name="title" content="{{ $seoData['title'] }}">
    <meta name="description" content="{{ $seoData['description'] }}">
    <meta name="keywords" content="{{ $seoData['keywords'] }}">
    <meta name="author" content="Foursquare Remodeling LLC">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ $seoData['canonical'] }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $seoData['canonical'] }}">
    <meta property="og:title" content="{{ $seoData['og_title'] }}">
    <meta property="og:description" content="{{ $seoData['og_description'] }}">
    <meta property="og:image" content="{{ url($seoData['og_image']) }}">
    <meta property="og:site_name" content="Foursquare Remodeling LLC">
    <meta property="og:locale" content="en_US">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ $seoData['canonical'] }}">
    <meta property="twitter:title" content="{{ $seoData['og_title'] }}">
    <meta property="twitter:description" content="{{ $seoData['og_description'] }}">
    <meta property="twitter:image" content="{{ url($seoData['og_image']) }}">
    
    <!-- Additional SEO Meta Tags -->
    <meta name="geo.region" content="US">
    <meta name="geo.placename" content="United States">
    <meta name="distribution" content="global">
    <meta name="rating" content="general">
    
    <!-- Structured Data / Schema.org -->
    <script type="application/ld+json">
        {!! json_encode($seoData['schema']) !!}
    </script>
    
    <!-- Preconnect to external domains for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- SEO Tracking -->
    @include('components.seo-tracking')
</head>
<body class="bg-gray-50 text-gray-900 min-h-screen flex flex-col">
    <!-- Header & Navigation -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto flex items-center justify-between px-4 py-3">
            <div class="text-xl font-bold tracking-wide text-red-700">Foursquare Remodeling LLC</div>
            <!-- Desktop Nav -->
            <nav class="hidden md:flex gap-8 text-base font-medium">
                <a href="/" class="hover:text-red-700 transition">Home</a>
                <a href="/about" class="hover:text-red-700 transition">About</a>
                <a href="/services" class="hover:text-red-700 transition">Services</a>
                <a href="/gallery" class="hover:text-red-700 transition">Gallery</a>
                <a href="/handyman" class="hover:text-red-700 transition">Handyman</a>
                <a href="/contact" class="hover:text-red-700 transition">Contact</a>
                @guest
                    <a href="/login" class="hover:text-red-700 transition" style="background:#007bff;color:#fff;padding:8px 16px;border-radius:4px;text-decoration:none;">Login</a>
                @else
                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit" class="hover:text-red-700 transition" style="background:#dc3545;color:#fff;padding:8px 16px;border-radius:4px;border:none;cursor:pointer;">Logout</button>
                    </form>
                @endguest
            </nav>
            <!-- Mobile Hamburger -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="focus:outline-none">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <nav id="mobile-menu" class="md:hidden hidden flex-col bg-white shadow-lg px-4 pb-4">
            <a href="/" class="block py-2 hover:text-red-700 transition">Home</a>
            <a href="/about" class="block py-2 hover:text-red-700 transition">About</a>
            <a href="/services" class="block py-2 hover:text-red-700 transition">Services</a>
            <a href="/gallery" class="block py-2 hover:text-red-700 transition">Gallery</a>
            <a href="/handyman" class="block py-2 hover:text-red-700 transition">Handyman</a>
            <a href="/contact" class="block py-2 hover:text-red-700 transition">Contact</a>
            @guest
                <a href="/login" class="block py-2 hover:text-red-700 transition" style="background:#007bff;color:#fff;padding:8px 16px;border-radius:4px;text-decoration:none;">Login</a>
            @else
                <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                    @csrf
                    <button type="submit" class="block py-2 hover:text-red-700 transition" style="background:#dc3545;color:#fff;padding:8px 16px;border-radius:4px;border:none;cursor:pointer;width:100%;text-align:left;">Logout</button>
                </form>
            @endguest
        </nav>
    </header>

    <!-- Main Content -->
    <main class="flex-1 container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-100 py-6 mt-8">
        <div class="container mx-auto text-center text-sm">
            &copy; {{ date('Y') }} Foursquare Remodeling LLC. All rights reserved.
        </div>
    </footer>

    <script>
        // Hamburger menu toggle
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        btn && btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html> 