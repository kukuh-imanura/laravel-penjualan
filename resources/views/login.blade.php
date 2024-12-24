<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css') <!-- Pastikan Tailwind sudah di-setup di sini -->
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen m-0">
    <form action="{{ route('login.authenticate') }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg w-96">
        @csrf
        <input type="text" name="username" placeholder="Username" required class="p-3 mb-4 w-full border border-gray-300 rounded-md text-lg focus:outline-none focus:ring-2 focus:ring-green-500">
        <input type="password" name="password" placeholder="Password" required class="p-3 mb-4 w-full border border-gray-300 rounded-md text-lg focus:outline-none focus:ring-2 focus:ring-green-500">
        <button type="submit" class="p-3 bg-green-500 text-white rounded-md w-full text-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">Login</button>

        @if ($errors->any())
            <div class="mt-4 text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</body>
</html>
