<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Publicar Producto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

@include('layouts.nav')

<div class="container">
    <h1>Publicar Producto</h1>

    <div class="card">

        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf

            <label>Nombre</label>
            <input type="text" name="name" required>

            <label>Precio</label>
            <input type="number" name="price" required>

            <label>Estado</label>
            <select name="status">
                <option value="Nuevo">Nuevo</option>
                <option value="Usado">Usado</option>
            </select>

            <!-- 🔥 NUEVO CAMPO IMAGEN -->
            <label>Imagen del producto</label>
            <input type="file" name="image" accept="image/*">

            <label>Descripción</label>
            <textarea name="description" rows="4"></textarea>

            <button type="submit" class="btn">Publicar</button>

        </form>

    </div>
</div>

@include('layouts.footer')

</body>
</html>
