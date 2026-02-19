@extends('layouts.app')
@section('content')

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

@endsection

