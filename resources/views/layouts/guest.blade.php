<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Foursquare Remodeling LLC') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body {
                background: #f8fafc;
            }
            .auth-container {
                max-width: 400px;
                margin: 60px auto;
                background: #fff;
                border-radius: 12px;
                box-shadow: 0 4px 24px rgba(0,0,0,0.08);
                padding: 32px 28px 24px 28px;
            }
            .auth-title {
                text-align: center;
                font-size: 2rem;
                font-weight: 600;
                margin-bottom: 24px;
                color: #222;
            }
            .auth-logo {
                display: flex;
                justify-content: center;
                margin-bottom: 12px;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="auth-logo">
            <x-application-logo class="w-16 h-16 fill-current text-gray-500" />
        </div>
        <div class="auth-container">
            {{ $slot }}
        </div>
    </body>
</html>
