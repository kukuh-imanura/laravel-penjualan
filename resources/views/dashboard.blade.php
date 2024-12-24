<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900 text-gray-200 m-0 p-0">

<header class="bg-gray-800 text-white text-center py-6 shadow-md">
        <h1 class="text-3xl font-semibold">dashboard</h1>
    </header>

    <main class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 px-6 py-12">
        <a href="{{ route('barangs.index') }}" class="bg-gray-800 text-white py-6 px-10 rounded-lg shadow-lg hover:bg-gray-700 transition duration-300 transform hover:scale-105 text-center">
            <h2 class="text-2xl font-semibold mb-4">Kelola Barang</h2>
            <p class="text-lg">Manage and organize your items efficiently</p>
        </a>

        <a href="{{ route('penjualans.index') }}" class="bg-gray-800 text-white py-6 px-10 rounded-lg shadow-lg hover:bg-gray-700 transition duration-300 transform hover:scale-105 text-center">
            <h2 class="text-2xl font-semibold mb-4">Kelola Penjualan</h2>
            <p class="text-lg">Track and manage your sales performance</p>
        </a>

        <a href="{{ route('logout') }}" class="bg-gray-700 text-white py-6 px-10 rounded-lg shadow-lg hover:bg-gray-600 transition duration-300 transform hover:scale-105 text-center">
            <h2 class="text-2xl font-semibold mb-4">Logout</h2>
            <p class="text-lg">Exit and secure your session</p>
        </a>
    </main>

    <footer class="text-center text-sm text-gray-500 py-6">
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </footer>

</body>

</html>
