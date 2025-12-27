<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('includes.navbar')

    <div class="container my-5">
        @yield('content')
    </div>

    @include('includes.footer')
</body>
</html>
