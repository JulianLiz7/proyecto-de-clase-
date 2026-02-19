@extends('layouts.app')

@section('title','Lista de Productos')

@section('content')

<h2>Productos Disponibles</h2>

<div class="grid">

    <div class="card">
        <img src="https://via.placeholder.com/400x300" alt="Producto">
        <h3>iPhone 15</h3>
        <p><strong>$4.500.000</strong></p>
        <a href="{{ url('/product/show') }}" class="btn">Ver Producto</a>
    </div>

    <div class="card">
        <img src="https://via.placeholder.com/400x300" alt="Producto">
        <h3>Portátil Gamer</h3>
        <p><strong>$3.200.000</strong></p>
        <a href="{{ url('/product/show') }}" class="btn">Ver Producto</a>
    </div>

    <div class="card">
        <img src="https://via.placeholder.com/400x300" alt="Producto">
        <h3>Audífonos Bluetooth</h3>
        <p><strong>$250.000</strong></p>
        <a href="{{ url('/product/show') }}" class="btn">Ver Producto</a>
    </div>

</div>

@endsection
