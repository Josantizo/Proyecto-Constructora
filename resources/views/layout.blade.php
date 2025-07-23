<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foursquare Remodeling LLC</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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