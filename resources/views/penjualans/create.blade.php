<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Penjualan</title>
    @vite('resources/css/app.css') <!-- Make sure Tailwind is properly setup -->
</head>
<body class="bg-gray-100">

    <header class="bg-green-500 text-white text-center py-4">
        <h1 class="text-2xl font-semibold">Tambah Penjualan</h1>
    </header>

    <div class="container mx-auto p-6">
        <form action="{{ route('penjualans.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md space-y-4">
            @csrf
            <input type="date" name="tgl_faktur" class="w-full p-3 border border-gray-300 rounded-md" required>
            <input type="text" name="no_faktur" placeholder="No Faktur" class="w-full p-3 border border-gray-300 rounded-md" required>
            <input type="text" name="nama_konsumen" placeholder="Nama Konsumen" class="w-full p-3 border border-gray-300 rounded-md" required>
            <select name="kode_barang" class="w-full p-3 border border-gray-300 rounded-md" required>
                @foreach ($barangs as $barang)
                    <option value="{{ $barang->kode_barang }}">{{ $barang->nama_barang }} ({{ $barang->stok }} tersedia)</option>
                @endforeach
            </select>
            <input type="number" name="jumlah" placeholder="Jumlah" class="w-full p-3 border border-gray-300 rounded-md" required>
            <input type="number" name="harga_satuan" placeholder="Harga Satuan" class="w-full p-3 border border-gray-300 rounded-md" required>
            <button type="submit" class="w-full py-3 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-300">Simpan</button>
        </form>
    </div>
</body>
</html>
