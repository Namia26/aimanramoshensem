<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'My SaaS') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white font-sans min-h-screen flex flex-col justify-center items-center p-6">

    <div class="w-full max-w-md space-y-8">
        <div class="text-center mb-8">
            <a href="/" class="text-3xl font-bold text-white hover:text-blue-400 transition">🚀 My SaaS</a>
        </div>

        <div class="bg-gray-800 p-8 rounded shadow-md border border-gray-700">
            {{ $slot }}
        </div>

        <div class="text-gray-500 text-sm text-center">
            &copy; {{ date('Y') }} My SaaS. All rights reserved.
        </div>
    </div>

</body>

</html>