<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Penjualan</title>
    @vite('resources/css/app.css') <!-- Ensure Tailwind CSS is set up -->
</head>

<body class="bg-gray-900 text-gray-200">

    <header class="bg-gray-800 text-white text-center py-6 shadow-md">
        <h1 class="text-3xl font-semibold">Kelola Penjualan</h1>
    </header>

    <div class="container mx-auto p-8">
        <a href="{{ route('penjualans.create') }}"
        class="inline-block bg-gray-700 text-white py-2 px-6 rounded-md mb-8 hover:bg-gray-600 transition duration-300">Tambah
            Penjualan</a>

        <ul class="space-y-6">
            @foreach ($penjualans as $penjualan)
                <li class="flex justify-between items-center bg-gray-800 p-6 rounded-lg shadow-lg">
                    <div>
                        <strong class="text-lg">{{ $penjualan->tgl_faktur }}</strong> -
                        <span>{{ $penjualan->nama_konsumen }}</span>
                    </div>
                    <form action="{{ route('penjualans.destroy', $penjualan->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-red-500 transition duration-300">Hapus</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

</body>

</html>
