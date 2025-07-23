<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard | My SaaS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white min-h-screen font-sans">

    <!-- Top Navbar -->
    <header class="bg-gray-800 px-6 py-4 flex justify-between items-center border-b border-gray-700">
        <h1 class="text-xl font-bold">🚀 My SaaS Dashboard</h1>

        <!-- Profile Dropdown -->
        <div class="relative group">
            <button class="flex items-center space-x-2 focus:outline-none">
                <span class="text-sm font-medium">Hi, {{ Auth::user()->name }}</span>
                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                    <path d="M5.5 7l4.5 4.5L14.5 7z" />
                </svg>
            </button>

            <!-- Dropdown -->
            <div class="absolute right-0 mt-2 w-40 bg-gray-800 border border-gray-700 rounded shadow-md hidden group-hover:block z-50">
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-700">👤 Profile</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-700">⚙️ Settings</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="w-full text-left px-4 py-2 text-sm text-red-400 hover:bg-red-900 hover:text-red-300">
                        🔓 Logout
                    </button>
                </form>
            </div>
        </div>
    </header>

    <main class="p-6">
        <h2 class="text-2xl font-semibold mb-4">Welcome back, {{ Auth::user()->name }} 👋</h2>

        <p class="mb-6 text-gray-300 leading-relaxed">
            Welcome to your admin panel. This system helps you manage your inventory, pricing, and electronic product listings efficiently.
        </p>

        <div class="bg-gray-800 border border-gray-700 rounded p-6 shadow">
            <h3 class="text-xl font-bold mb-2">About Your Products</h3>
            <p class="text-gray-400">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ullamcorper, justo at dapibus convallis, justo erat laoreet nulla, non facilisis velit ipsum in nulla.
                Cras dapibus, ligula ac feugiat lacinia, tortor nisl cursus sapien, non imperdiet lacus sapien in justo. Phasellus feugiat, lacus at tempus iaculis, sapien nunc iaculis neque, eget porta magna ligula at nunc.
            </p>
        </div>
    </main>

</body>

</html>