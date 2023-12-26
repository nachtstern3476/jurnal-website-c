<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login</title>
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet">
</head>

<body class="h-screen flex justify-center items-center bg-gray-200">
    <div class="p-4">
        <form id="login" class="flex flex-col w-auto sm:w-96 bg-white shadow-xl p-4 rounded-md mx-auto" method="POST"
            action="{{ route('login.post') }}">
            @csrf
            <h1 class="text-center mb-6 font-semibold text-3xl text-teal-700">Society</h1>
            @if (session('error'))
                <div class="text-center mb-4" style="color: red">Pastikan Username dan Password benar</div>
            @endif
            <input class="mb-4 border-2 border-solid p-2" name="username" placeholder="username">
            <input class="mb-4 border-2 border-solid p-2" type="password" name="password" placeholder="Password">
            <button class="mb-4 bg-teal-700 text-white font-medium px-3 py-2">Login</button>
            {{-- <p class="text-sm text-center">Don't have an account? <a class="text-teal-700"
                    href="register.html">Register</a></p> --}}
        </form>
    </div>
</body>

</html>
