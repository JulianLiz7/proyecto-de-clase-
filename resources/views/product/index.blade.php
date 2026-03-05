@extends('layouts.app')

@section('title', 'Inicio - Listado de Productos')

@section('content')
    <div class="container">
        <h1>Nuestros Productos</h1>

        
        <div class="products">
            @foreach($misProductos as $product)
                
                <div class="card">
                    
                    <div class="emoji">
                        @if ($product->image)
                        <img src="{{ asset('storage/'.$product->image) }}" alt="" >
                    
                         @else
                         <img src="{{ asset('https://cdn-icons-png.freepik.com/512/18233/18233962.png') }}" alt="Imagen por defecto" >
                                
                            
                        @endif
                        
                    </div>

                    <h3>{{ $product['name'] }}</h3>
                    
                    <p style="color: #aaa; font-size: 0.9rem; margin: 10px 0;">
                        {{ Str::limit($product['description'], 50) }}
                    </p>

                    <h2 style="color: #00d4ff;">${{ number_format($product['price'], 2) }}</h2>

                    <p style="margin: 10px 0;">
                        <span class="status-badge" style="color: {{ $product['state'] == 'Disponible' ? '#00d4ff' : '#ff4d4d' }}">
                            {{ $product['state'] }}
                        </span>
                    </p>

                    <a href="/tienda/{{ $product['id'] }}" class="btn">Ver Detalles</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection