@extends('layouts.admin')

@section('title', 'Gestión de Productos')

@section('header_title', 'Productos')

@section('content')

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h3 style="color: #4b5563; font-weight: 600;">Todos los Productos</h3>
        <!-- Pointers for future create functionality -->
        <a href="{{ route('product.index') }}" target="_blank" class="badge badge-success" style="text-decoration: none; padding: 10px 15px;">+ Nuevo Producto (Pronto)</a>
    </div>

    <div class="admin-table-container">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                    <tr>
                        <td>#{{ $product->id }}</td>
                        <td>
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
                            @else
                                <div style="width: 50px; height: 50px; background: #e5e7eb; border-radius: 5px; display: flex; align-items: center; justify-content: center; font-size: 10px;">Sin Img</div>
                            @endif
                        </td>
                        <td style="font-weight: 500;">{{ $product->name }}</td>
                        <td>${{ number_format($product->price, 2) }}</td>
                        <td>
                            <span class="badge {{ $product->state == 'Disponible' ? 'badge-success' : 'badge-danger' }}">
                                {{ $product->state }}
                            </span>
                        </td>
                        <td>
                            <!-- Fake action buttons for now to fulfill the layout -->
                            <a href="#" style="color: #38bdf8; text-decoration: none; margin-right: 10px; font-weight: 600;">Editar</a>
                            <a href="#" style="color: #ef4444; text-decoration: none; font-weight: 600;">Eliminar</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" style="text-align: center; padding: 30px; color: #6b7280;">No hay productos registrados en la base de datos.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
