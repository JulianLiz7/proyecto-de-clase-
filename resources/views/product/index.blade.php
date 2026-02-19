<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

@include('layouts.nav')

<div class="container">
    <h1>Productos</h1>

    <div class="grid">

        <div class="card">
            <div class="emoji">📱</div>
            <h3>iPhone 15</h3>
            <p><strong>$4.500.000</strong></p>
            <a href="{{ url('/product/show') }}" class="btn">Ver Producto</a>
        </div>

        <div class="card">
            <div class="emoji">💻</div>
            <h3>Portátil Gamer</h3>
            <p><strong>$3.200.000</strong></p>
            <a href="{{ url('/product/show') }}" class="btn">Ver Producto</a>
        </div>

        <div class="card">
            <div class="emoji">🎧</div>
            <h3>Audífonos Bluetooth</h3>
            <p><strong>$250.000</strong></p>
            <a href="{{ url('/product/show') }}" class="btn">Ver Producto</a>
        </div>

    </div>
</div>

@include('layouts.footer')

</body>
</html>
