<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Penjualan</title>
    @vite('resources/css/app.css') <!-- Make sure Tailwind is properly setup -->
</head>

<body class="bg-gray-900 text-gray-200">

    <header class="bg-gray-800 text-white text-center py-6 shadow-md">
        <h1 class="text-3xl font-semibold">Tambah Penjualan</h1>
    </header>

    <div class="container mx-auto p-8">
        <form action="{{ route('penjualans.store') }}" method="POST"
            class="bg-gray-800 p-8 rounded-lg shadow-xl space-y-6">
            @csrf
            <input type="date" name="tgl_faktur" class="w-full p-4 bg-gray-700 text-gray-200 border border-gray-600 rounded-md" required>
            <input type="text" name="no_faktur" placeholder="No Faktur" class="w-full p-4 bg-gray-700 text-gray-200 border border-gray-600 rounded-md" required>
            <input type="text" name="nama_konsumen" placeholder="Nama Konsumen" class="w-full p-4 bg-gray-700 text-gray-200 border border-gray-600 rounded-md" required>
            <select name="kode_barang" class="w-full p-4 bg-gray-700 text-gray-200 border border-gray-600 rounded-md" required>
                @foreach ($barangs as $barang)
                    <option value="{{ $barang->kode_barang }}">{{ $barang->nama_barang }} ({{ $barang->stok }} tersedia)</option>
                @endforeach
            </select>
            <input type="number" name="jumlah" placeholder="Jumlah" class="w-full p-4 bg-gray-700 text-gray-200 border border-gray-600 rounded-md" required>
            <input type="number" name="harga_satuan" placeholder="Harga Satuan" class="w-full p-4 bg-gray-700 text-gray-200 border border-gray-600 rounded-md" required>
            <button type="submit" class="w-full py-3 bg-blue-600 text-white rounded-md hover:bg-blue-500 transition duration-300">Simpan</button>
        </form>
    </div>
</body>

</html>
