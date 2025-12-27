<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="d-flex flex-column min-vh-100 bg-light">
    @include('includes.navbar')

    @yield('full_width_content')

    <div class="container my-5 flex-grow-1">
        @yield('content')
    </div>

    @include('includes.footer')
</body>

</html>