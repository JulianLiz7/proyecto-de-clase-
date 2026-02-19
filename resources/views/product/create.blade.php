@extends('layouts.app')

@section('title','Crear Producto')

@section('content')

<h2>Publicar Nuevo Producto</h2>

<form action="#" method="POST" enctype="multipart/form-data">
    @csrf

    <label>ID Producto</label>
    <input type="text" name="id_producto">

    <label>Nombre</label>
    <input type="text" name="nombre">

    <label>Precio</label>
    <input type="number" name="precio">

    <label>Descripción</label>
    <textarea name="descripcion"></textarea>

    <label>Imagen</label>
    <input type="file" name="imagen">

    <label>Estado</label>
    <select name="estado">
        <option value="nuevo">Nuevo</option>
        <option value="usado">Usado</option>
    </select>

    <button type="submit" class="btn">Publicar Producto</button>

</form>

@endsection
