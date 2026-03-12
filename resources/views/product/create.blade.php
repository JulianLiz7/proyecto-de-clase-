@extends('layouts.app')
@section('title', 'Publicar Producto')

@section('content')
<div class="container">
    <h1>Publicar Producto</h1>

    <div class="card">

        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <label>Nombre</label>
            <input type="text" name="name" >
            @error('nombre')
            <span style="color: red; font-size: 14px;">
                {{$message}}
            </span>
            @enderror
                
        

            <label>Precio</label>
            <input type="number" name="price" >
            @error('precio')
            <span style="color: red; font-size: 14px;">
                {{$message}}
            </span>
            @enderror

            <label>Estado</label>
            <select name="categoria">
                <option value="Nuevo">Nuevo</option>
                <option value="Usado">Usado</option>
            </select>
            @error('categoria')
            <span style="color: red; font-size: 14px;">
                {{$message}}
            </span>
            @enderror

            <!-- 🔥 NUEVO CAMPO IMAGEN -->
            <label>Imagen del producto</label>
            <input type="file" name="imagen" accept="image/*">
            @error('imagen')
            <span style="color: red; font-size: 14px;">
                {{$message}}
            </span>
            @enderror

            <label>Descripción</label>
            <textarea name="description" rows="4"></textarea>
            @error('description')
            <span style="color: red; font-size: 14px;">
                {{$message}}
            </span>
            @enderror

            <button type="submit" class="btn">Publicar</button>

        </form>

    </div>
</div>
@endsection
