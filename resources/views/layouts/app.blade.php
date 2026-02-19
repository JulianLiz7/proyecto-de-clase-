<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Productos') - MiniMarket</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>
<body>
    @include('layouts.nav')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    @yield('js')
</body>
</html>
