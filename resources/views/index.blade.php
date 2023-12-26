<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet">
</head>

<body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
