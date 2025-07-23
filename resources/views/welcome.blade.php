<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My SaaS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans">

    <header class="p-6 flex justify-between items-center border-b border-gray-700">
        <h1 class="text-2xl font-bold">🚀 My SaaS</h1>
        <nav class="space-x-4">
            <a href="/login" class="hover:underline">Login</a>
            <a href="/register" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded text-white font-semibold">Sign Up</a>
        </nav>
    </header>

    <main class="text-center mt-32 px-4">
        <h2 class="text-5xl font-extrabold mb-6">Supercharge your workflow</h2>
        <p class="text-gray-300 text-lg mb-10">Welcome to the future of SaaS. Secure. Fast. Easy to use.</p>
        <a href="/register" class="bg-blue-600 hover:bg-blue-700 px-8 py-4 text-lg rounded shadow">Get Started</a>
    </main>

    <footer class="mt-32 text-center text-gray-500 text-sm pb-10">
        &copy; {{ date('Y') }} My SaaS. All rights reserved.
    </footer>

</body>
</html>
