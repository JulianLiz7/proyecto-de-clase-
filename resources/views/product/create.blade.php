@extends('layouts.app')
@section('title', 'Publicar Producto')

@section('content')
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
@endsection
