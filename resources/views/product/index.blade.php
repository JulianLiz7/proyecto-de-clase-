@extends('layouts.app')

@section('title', 'Inicio - Listado de Productos')

@section('content')
    <div class="container">
        <h1>Nuestros Productos</h1>

        {{-- Cambiamos a class="products" para que coincida con tu CSS --}}
        <div class="products">
            @foreach($misProductos as $p)
                {{-- Cambiamos a class="card" para que coincida con tu CSS --}}
                <div class="card">
                    {{-- Contenedor para la imagen --}}
                    <div class="emoji">
                        <img src="{{ $p['img'] }}" alt="{{ $p['name'] }}" 
                             style="width: 100%; height: 180px; object-fit: cover; border-radius: 10px;">
                    </div>

                    <h3>{{ $p['name'] }}</h3>
                    
                    <p style="color: #aaa; font-size: 0.9rem; margin: 10px 0;">
                        {{ Str::limit($p['description'], 50) }}
                    </p>

                    <h2 style="color: #00d4ff;">${{ number_format($p['price'], 2) }}</h2>

                    <p style="margin: 10px 0;">
                        <span class="status-badge" style="color: {{ $p['state'] == 'Disponible' ? '#00d4ff' : '#ff4d4d' }}">
                            {{ $p['state'] }}
                        </span>
                    </p>

                    <a href="/tienda/{{ $p['id'] }}" class="btn">Ver Detalles</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection