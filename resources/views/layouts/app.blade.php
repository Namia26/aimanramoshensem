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

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="p-6 bg-gray-800 border-b border-gray-700 flex justify-between items-center">
            <h1 class="text-xl font-bold text-white">🚀 My SaaS</h1>

            <!-- Unified Dropdown -->
            <div class="relative group">
                <button class="flex items-center space-x-2 focus:outline-none">
                    <span class="text-sm font-medium">{{ Auth::user()->name }}</span>
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                        <path d="M5.5 7l4.5 4.5L14.5 7z" />
                    </svg>
                </button>

                <div class="absolute right-0 mt-2 w-48 bg-gray-800 border border-gray-700 rounded shadow-md hidden group-hover:block z-50">
                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:bg-gray-700">🏠 Dashboard</a>
                    <a href="{{ route('products.index') }}" class="block px-4 py-2 text-sm hover:bg-gray-700">🛒 Products</a>
                    <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-700">👤 Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-700">⚙️ Settings</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="w-full text-left px-4 py-2 text-sm text-red-400 hover:bg-red-900 hover:text-red-300">🔓 Logout</button>
                    </form>
                </div>

            </div>
        </header>


        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>