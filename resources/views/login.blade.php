<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900 text-gray-200 flex justify-center items-center h-screen m-0">

    <div class="bg-gray-800 p-8 rounded-lg shadow-xl w-full max-w-sm">
        <h2 class="text-3xl font-semibold text-center mb-6">Login</h2>
        <form action="{{ route('login.authenticate') }}" method="POST" class="space-y-6">
            @csrf
            <input type="text" name="username" placeholder="Username" required class="w-full p-4 bg-gray-700 text-gray-200 rounded-md border border-gray-600 focus:ring-2 focus:ring-gray-500 focus:outline-none">
            <input type="password" name="password" placeholder="Password" required class="w-full p-4 bg-gray-700 text-gray-200 rounded-md border border-gray-600 focus:ring-2 focus:ring-gray-500 focus:outline-none">
            <button type="submit" class="w-full py-3 bg-gray-600 text-white rounded-md hover:bg-gray-500 transition duration-300">Login</button>
        </form>

        @if ($errors->any())
            <div class="mt-4 text-red-500 text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

</body>

</html>
