<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Barang</title>
    @vite('resources/css/app.css') <!-- Pastikan Tailwind sudah di-setup di sini -->
</head>
<body class="bg-gray-100 m-0 p-0">
    <header class="bg-green-500 text-white text-center py-4">
        <h1 class="text-2xl font-semibold">Kelola Barang</h1>
    </header>

    <div class="container mx-auto p-4">
        <a href="{{ route('barangs.create') }}" class="inline-block bg-blue-500 text-white py-2 px-4 rounded-lg mb-4 hover:bg-blue-600 transition duration-300">Tambah Barang</a>
        <ul class="list-none p-0 space-y-4">
            @foreach ($barangs as $barang)
                <li class="bg-white p-4 rounded-lg shadow-md flex justify-between items-center">
                    <div>
                        <strong>{{ $barang->nama_barang }}</strong> - {{ $barang->stok }} ({{ $barang->kategori }})
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('barangs.edit', $barang->kode_barang) }}" class="bg-green-500 text-white py-1 px-3 rounded-lg hover:bg-green-600 transition duration-300">Edit</a>
                        <form action="{{ route('barangs.destroy', $barang->kode_barang) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded-lg hover:bg-red-600 transition duration-300">Hapus</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </d
