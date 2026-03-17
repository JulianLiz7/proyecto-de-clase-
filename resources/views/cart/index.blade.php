@extends('layouts.app')

@section('title', 'Tu Carrito')

@section('content')
<div class="container">
    <div class="header-container">
        <h1>Tu Carrito 🛒</h1>
    </div>

    @if(session('success'))
        <div style="background: rgba(16, 185, 129, 0.2); color: #34d399; padding: 15px; border-radius: 10px; text-align: center; margin-bottom: 20px; font-weight: bold; border: 1px solid rgba(52, 211, 153, 0.3);">
            {{ session('success') }}
        </div>
    @endif

    <div class="glass-card" style="padding: 30px; margin-bottom: 30px;">
        @if(session('cart') && count(session('cart')) > 0)
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; color: #f8fafc;">
                    <thead>
                        <tr style="border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
                            <th style="padding: 15px;">Producto</th>
                            <th style="padding: 15px;">Precio</th>
                            <th style="padding: 15px; text-align: center;">Cantidad</th>
                            <th style="padding: 15px; text-align: right;">Subtotal</th>
                            <th style="padding: 15px; text-align: center;">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(session('cart') as $id => $details)
                            <tr style="border-bottom: 1px solid rgba(255, 255, 255, 0.05);">
                                <td style="padding: 15px; display: flex; align-items: center; gap: 15px;">
                                    @if(isset($details['image']) && $details['image'])
                                        <img src="{{ asset('storage/' . $details['image']) }}" alt="{{ $details['name'] }}" style="width: 50px; height: 50px; border-radius: 8px; object-fit: cover;">
                                    @else
                                        <div style="width: 50px; height: 50px; border-radius: 8px; background: rgba(0,0,0,0.2); display: flex; align-items: center; justify-content: center;">Foto</div>
                                    @endif
                                    <span style="font-weight: 600; font-size: 1.1rem;">{{ $details['name'] }}</span>
                                </td>
                                <td style="padding: 15px; color: #38bdf8; font-weight: bold;">${{ number_format($details['price'], 2) }}</td>
                                <td style="padding: 15px; text-align: center;">
                                    <form action="{{ route('cart.update', $id) }}" method="POST" style="display: flex; gap: 10px; justify-content: center; background: transparent; padding: 0; box-shadow: none; margin: 0;">
                                        @csrf
                                        <input type="number" name="quantity" value="{{ $details['quantity'] }}" min="1" style="width: 60px; padding: 8px; margin: 0; text-align: center; border-radius: 5px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.5); color: white;">
                                        <button class="btn" type="submit" style="padding: 8px; min-width: 40px; margin: 0; background-color: #38bdf8; border-radius: 5px;">↻</button>
                                    </form>
                                </td>
                                <td style="padding: 15px; text-align: right; font-weight: bold;">${{ number_format($details['price'] * $details['quantity'], 2) }}</td>
                                <td style="padding: 15px; text-align: center;">
                                    <form action="{{ route('cart.remove', $id) }}" method="POST" style="margin: 0; padding: 0; background: transparent; box-shadow: none;">
                                        @csrf
                                        <button class="btn btn-danger" type="submit" style="padding: 8px 15px; margin: 0; border-radius: 5px;">X</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid rgba(255, 255, 255, 0.1);">
                <form action="{{ route('cart.clear') }}" method="POST" style="margin: 0; padding: 0; background: transparent; box-shadow: none;">
                    @csrf
                    <button class="btn btn-danger" type="submit">Vaciar Carrito</button>
                </form>

                <div style="text-align: right;">
                    <h2 style="font-size: 1.5rem; color: #94a3b8; margin-bottom: 5px;">Total a Pagar</h2>
                    <h1 style="font-size: 2.5rem; color: #38bdf8; margin-bottom: 15px; text-shadow: 0 0 10px rgba(56, 189, 248, 0.4);">${{ number_format($totalPrice, 2) }}</h1>
                    <button class="btn btn-glow" style="font-size: 1.2rem; padding: 15px 40px;" onclick="alert('¡Esta es una simulación de compra!')">Proceder al Pago 🚀</button>
                </div>
            </div>

        @else
            <div style="text-align: center; padding: 50px 20px;">
                <h2 style="color: #94a3b8; margin-bottom: 20px;">Tu carrito está vacío 😔</h2>
                <a href="{{ route('product.index') }}" class="btn btn-glow">Explorar Productos</a>
            </div>
        @endif
    </div>
</div>
@endsection
