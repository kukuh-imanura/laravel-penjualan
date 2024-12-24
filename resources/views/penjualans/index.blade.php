<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Penjualan</title>
    @vite('resources/css/app.css') <!-- Ensure Tailwind CSS is set up -->
</head>
<body class="bg-gray-100">

    <header class="bg-green-500 text-white text-center py-4">
        <h1 class="text-2xl font-semibold">Kelola Penjualan</h1>
    </header>

    <div class="container mx-auto p-6">
        <a href="{{ route('penjualans.create') }}" class="inline-block bg-blue-500 text-white py-2 px-4 rounded-lg text-lg mb-6 hover:bg-blue-600 transition duration-300">Tambah Penjualan</a>
        
        <ul class="space-y-4">
            @foreach ($penjualans as $penjualan)
                <li class="flex justify-between items-center bg-white p-4 rounded-lg shadow-md">
                    <div>
                        <strong class="text-lg">{{ $penjualan->tgl_faktur }}</strong> - <span>{{ $penjualan->nama_konsumen }}</span>
                    </div>
                    <form action="{{ route('penjualans.destroy', $penjualan->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600 transition duration-300">Hapus</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
