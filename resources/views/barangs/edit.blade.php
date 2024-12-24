<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    @vite('resources/css/app.css') <!-- Pastikan Tailwind sudah di-setup di sini -->
</head>

<body class="bg-gray-900 text-gray-200 m-0 p-0">

    <header class="bg-gray-800 text-white text-center py-6 shadow-md">
        <h1 class="text-3xl font-semibold">Edit Barang</h1>
    </header>

    <div class="flex justify-center items-center min-h-screen p-6">
        <form action="{{ route('barangs.update', $barang->kode_barang) }}" method="POST" class="bg-gray-800 p-8 rounded-lg shadow-xl w-full max-w-lg space-y-6">
            @csrf
            @method('PUT')
            <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" class="w-full p-4 bg-gray-700 text-gray-200 rounded-md border border-gray-600 focus:ring-2 focus:ring-gray-500 focus:outline-none" required>
            <input type="number" name="harga_jual" value="{{ $barang->harga_jual }}" class="w-full p-4 bg-gray-700 text-gray-200 rounded-md border border-gray-600 focus:ring-2 focus:ring-gray-500 focus:outline-none" required>
            <input type="number" name="harga_beli" value="{{ $barang->harga_beli }}" class="w-full p-4 bg-gray-700 text-gray-200 rounded-md border border-gray-600 focus:ring-2 focus:ring-gray-500 focus:outline-none" required>
            <input type="text" name="satuan" value="{{ $barang->satuan }}" class="w-full p-4 bg-gray-700 text-gray-200 rounded-md border border-gray-600 focus:ring-2 focus:ring-gray-500 focus:outline-none" required>
            <input type="text" name="kategori" value="{{ $barang->kategori }}" class="w-full p-4 bg-gray-700 text-gray-200 rounded-md border border-gray-600 focus:ring-2 focus:ring-gray-500 focus:outline-none" required>
            <input type="number" name="stok" value="{{ $barang->stok }}" class="w-full p-4 bg-gray-700 text-gray-200 rounded-md border border-gray-600 focus:ring-2 focus:ring-gray-500 focus:outline-none" required>
            <button type="submit" class="w-full py-3 bg-gray-600 text-white rounded-md hover:bg-gray-500 transition duration-300">Update</button>
        </form>
    </div>

    <footer class="text-center text-sm text-gray-500 py-6">
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </footer>

</body>

</html>
