<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    @vite('resources/css/app.css') <!-- Pastikan Tailwind sudah di-setup di sini -->
</head>
<body class="bg-gray-100 m-0 p-0">
    <header class="bg-green-500 text-white text-center py-4">
        <h1 class="text-2xl font-semibold">Edit Barang</h1>
    </header>

    <div class="flex flex-col justify-center items-center h-screen">
        <form action="{{ route('barangs.update', $barang->kode_barang) }}" method="POST" class="bg-white p-8 rounded-lg shadow-lg w-96 space-y-4">
            @csrf
            @method('PUT')
            <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" class="w-full p-3 border border-gray-300 rounded-md" required>
            <input type="number" name="harga_jual" value="{{ $barang->harga_jual }}" class="w-full p-3 border border-gray-300 rounded-md" required>
            <input type="number" name="harga_beli" value="{{ $barang->harga_beli }}" class="w-full p-3 border border-gray-300 rounded-md" required>
            <input type="text" name="satuan" value="{{ $barang->satuan }}" class="w-full p-3 border border-gray-300 rounded-md" required>
            <input type="text" name="kategori" value="{{ $barang->kategori }}" class="w-full p-3 border border-gray-300 rounded-md" required>
            <input type="number" name="stok" value="{{ $barang->stok }}" class="w-full p-3 border border-gray-300 rounded-md" required>
            <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-md hover:bg-blue-600 transition duration-300">Update</button>
        </form>
    </div>

    <footer class="text-center text-sm text-gray-500 mt-12">
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </footer>
</body>
</html>
