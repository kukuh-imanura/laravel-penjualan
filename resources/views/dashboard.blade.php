```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css') <!-- Pastikan Tailwind sudah di-setup di sini -->
</head>
<body class="bg-gray-100 m-0 p-0">
    <header class="bg-green-500 text-white py-4 text-center">
        <h1 class="text-2xl font-semibold">Dashboard</h1>
    </header>
    
    <div class="flex flex-col items-center justify-center h-screen space-y-4">
        <a href="{{ route('barangs.index') }}" class="bg-blue-500 text-white py-3 px-6 rounded-md text-lg w-48 text-center hover:bg-blue-600 transition duration-300">Kelola Barang</a>
        <a href="{{ route('penjualans.index') }}" class="bg-blue-500 text-white py-3 px-6 rounded-md text-lg w-48 text-center hover:bg-blue-600 transition duration-300">Kelola Penjualan</a>
        <a href="{{ route('logout') }}" class="bg-red-500 text-white py-3 px-6 rounded-md text-lg w-48 text-center hover:bg-red-600 transition duration-300">Logout</a>
    </div>

    <footer class="text-center text-sm text-gray-500 mt-12">
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </footer>
</body>
</html>
```