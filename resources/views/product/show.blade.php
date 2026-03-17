@extends('layouts.app')
@section('title', 'Detalle Producto')

@section('content')
<div class="container">
    <div class="header-container">
        <h1>Detalle del Producto ✨</h1>
    </div>

    <div class="glass-card" style="max-width: 800px; margin: 0 auto; display: flex; flex-direction: row; gap: 30px; align-items: center;">
        
        <div class="card-image-wrapper" style="flex: 1; height: 350px; border-radius: 15px;">
            @if ($producto->image)
                <img src="{{ asset('storage/' . $producto->image) }}" alt="{{ $producto->name }}" class="product-img">
            @else
                <img src="{{ asset('https://cdn-icons-png.freepik.com/512/18233/18233962.png') }}"
                    alt="Imagen por defecto" class="product-img">
            @endif
            <div class="status-overlay">
                <span class="status-badge {{ $producto->state == 'Disponible' ? 'badge-available' : 'badge-unavailable' }}">
                    {{ $producto->state }}
                </span>
            </div>
        </div>

        <div class="card-content" style="flex: 1; text-align: left;">
            <h2 style="font-size: 2.5rem; color: #38bdf8; margin-bottom: 20px;">{{ $producto->name }}</h2>
            
            <p class="product-desc" style="font-size: 1.1rem; line-height: 1.6;">
                {{ $producto->description }}
            </p>

            <div class="price-tag" style="font-size: 2rem; margin: 25px 0;">
                ${{ number_format($producto->price, 2) }}
            </div>

            <div class="card-actions" style="margin-top: 30px; display: flex; gap: 15px;">
                <a href="{{ route('product.index') }}" class="btn btn-glow" style="flex: 1; text-align: center;">Volver a Productos</a>
                
                <form action="{{ route('cart.add', $producto) }}" method="POST" style="flex: 1; margin: 0; padding: 0; background: transparent; box-shadow: none;">
                    @csrf
                    <!-- Include a hidden quantity field or a visible one later -->
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" class="btn" style="background-color: #10b981; color: white; width: 100%; height: 100%;">Añadir al Carrito</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
