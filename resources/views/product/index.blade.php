@extends('layout.app')

{{-- Aquí defines el título específico para la pestaña del navegador --}}
@section('title', 'Inicio - Listado de Productos')

@section('content')
    <div class="results-bar">
        1-5 de 5 resultados para <span style="color: #c45500; font-weight: bold;">"Electrónicos de Clase"</span>
    </div>

    <div class="container">
        <div class="product-grid">
            @foreach($misProductos as $p)
                <div class="product-card">
                    <a href="/tienda/{{ $p['id'] }}">
                        <img src="{{ $p['img'] }}" alt="{{ $p['name'] }}">
                    </a>

                    <a href="/tienda/{{ $p['id'] }}" style="text-decoration: none;">
                        <p style="font-size: 0.8rem; color: #565959;">ID: #{{ $p['id'] }}</p>
                        
                        <p style="font-size: 0.9rem; margin: 5px 0;">
                            {{ Str::limit($p['description'], 80) }}
                        </p>

                        <p class="price">
                            <span style="font-size: 0.8rem; vertical-align: top;">$</span>{{ number_format($p['price'], 2) }}
                        </p>

                        <div style="margin-top: 10px;">
                            <span class="status-badge {{ $p['state'] == 'Disponible' ? 'available' : 'unavailable' }}">
                                {{ $p['state'] }}
                            </span>
                        </div>

                        <p style="font-size: 0.8rem; color: #007600; margin-top: 10px;">
                            ✓ Envío gratis a Bucaramanga
                        </p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection