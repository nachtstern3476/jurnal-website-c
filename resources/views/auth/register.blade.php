<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Register</title>
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet">
</head>

<body class="h-screen flex justify-center items-center bg-gray-200">
    <div class="p-4">
        <form class="flex flex-col w-auto sm:w-96 bg-white shadow-xl p-4 rounded-md mx-auto" method="POST"
            action="{{ route('register.post') }}">
            @csrf
            <h1 class="text-center mb-8 font-semibold text-3xl text-teal-700">Society</h1>
            <input class="mb-4 border-2 border-solid p-2" type="text" name="username" placeholder="Username">
            <input class="mb-4 border-2 border-solid p-2" type="email" name="email" placeholder="Email">
            <input class="mb-4 border-2 border-solid p-2" type="password" name="password" placeholder="Password">
            <button class="mb-4 bg-teal-700 text-white font-medium px-3 py-2">Register</button>
        </form>
    </div>
</body>

</html>
