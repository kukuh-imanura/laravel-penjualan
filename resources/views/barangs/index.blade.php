<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Barang</title>
    @vite('resources/css/app.css') <!-- Pastikan Tailwind sudah di-setup di sini -->
</head>

<body class="bg-gray-900 text-gray-200 m-0 p-0">

    <header class="bg-gray-800 text-white text-center py-6 shadow-md">
        <h1 class="text-3xl font-semibold">Kelola Barang</h1>
    </header>

    <div class="container mx-auto p-8">
        <a href="{{ route('barangs.create') }}"
            class="inline-block bg-gray-700 text-white py-2 px-6 rounded-md mb-8 hover:bg-gray-600 transition duration-300">Tambah
            Barang</a>
        <ul class="space-y-6">
            @foreach ($barangs as $barang)
                <li class="bg-gray-800 p-6 rounded-lg shadow-xl flex justify-between items-center">
                    <div class="text-lg font-medium">
                        <strong>{{ $barang->nama_barang }}</strong> - {{ $barang->stok }} ({{ $barang->kategori }})
                    </div>
                    <div class="flex gap-4">
                        <a href="{{ route('barangs.edit', $barang->kode_barang) }}"
                            class="bg-gray-600 text-white py-2 px-4 rounded-md hover:bg-gray-500 transition duration-300">Edit</a>
                        <form action="{{ route('barangs.destroy', $barang->kode_barang) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                            class="bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-red-500 transition duration-300">Hapus</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <footer class="text-center text-sm text-gray-500 py-6">
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </footer>

</body>

</html>
