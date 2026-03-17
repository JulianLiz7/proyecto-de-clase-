@extends('layouts.app')

@section('title', 'Inicio - Listado de Productos')

@section('content')
    <div class="container">
        <div class="header-container">
            <h1>Nuestros Productos ✨</h1>
        </div>

        <div class="products-grid">
            @foreach ($misProductos as $product)
                <div class="glass-card">
                    <div class="card-image-wrapper">
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product['name'] }}" class="product-img">
                        @else
                            <img src="{{ asset('https://cdn-icons-png.freepik.com/512/18233/18233962.png') }}"
                                alt="Imagen por defecto" class="product-img">
                        @endif
                        <div class="status-overlay">
                            <span class="status-badge {{ $product['state'] == 'Disponible' ? 'badge-available' : 'badge-unavailable' }}">
                                {{ $product['state'] }}
                            </span>
                        </div>
                    </div>

                    <div class="card-content">
                        <h3>{{ $product['name'] }}</h3>

                        <p class="product-desc">
                            {{ Str::limit($product['description'], 60) }}
                        </p>

                        <div class="price-tag">
                            ${{ number_format($product['price'], 2) }}
                        </div>

                        <div class="card-actions">
                            <a href="{{ route('product.show', $product->id) }}" class="btn btn-glow">Ver Detalles</a>
                            <form action="{{ route('product.destroy', $product->id) }}" method="POST" class="delete-form">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
