<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle Producto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

@include('layouts.nav')

<div class="container">
    <div class="card">
        <h2>iPhone 15</h2>
        <p><strong>Precio:</strong> $4.500.000</p>
        <p><strong>Estado:</strong> Nuevo</p>
        <p>
            Este producto cuenta con tecnología de última generación,
            cámara de alta resolución y excelente rendimiento.
            Ideal para quienes buscan calidad y potencia.
        </p>
    </div>
</div>

@include('layouts.footer')

</body>
</html>
