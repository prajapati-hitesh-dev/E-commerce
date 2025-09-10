<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS via CDN (fallback to avoid Vite) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- App script without Vite -->
    <script defer src="/js/app.js"></script>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-50">
        @include('partials.header')
        
        <main class="pb-20 md:pb-0">
            @yield('content')
        </main>

        @include('partials.footer')
        @include('partials.mobile-nav')
        @include('partials.cart')
        @include('partials.auth-modal')
        @include('partials.spin-wheel')
        @include('partials.toast')
    </div>

    <script>
        // Global JavaScript for cart, auth, and other functionality
        window.Laravel = {
            csrfToken: '{{ csrf_token() }}',
            baseUrl: '{{ url('/') }}'
        };
    </script>
</body>
</html>
