@extends('layouts.admin')

@section('title', 'Gestión de Categorías')

@section('header_title', 'Categorías')

@section('content')

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h3 style="color: #4b5563; font-weight: 600;">Todas las Categorías</h3>
        <a href="{{ route('admin.categories.create') }}" class="badge badge-success" style="text-decoration: none; padding: 10px 15px; font-size: 0.9rem;">+ Nueva Categoría</a>
    </div>

    @if(session('success'))
        <div style="padding: 15px; background-color: #d1fae5; color: #065f46; border-radius: 8px; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div style="padding: 15px; background-color: #fee2e2; color: #991b1b; border-radius: 8px; margin-bottom: 20px;">
            {{ session('error') }}
        </div>
    @endif

    <div class="admin-table-container">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Cant. Productos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td style="font-weight: bold; color: #6b7280;">#{{ $category->id }}</td>
                        <td style="font-weight: 600;">{{ $category->name }}</td>
                        <td style="color: #4b5563;">{{ Str::limit($category->description, 50) }}</td>
                        <td>
                            <span class="badge {{ $category->products()->count() > 0 ? 'badge-success' : 'badge-warning' }}">
                                {{ $category->products()->count() }}
                            </span>
                        </td>
                        <td style="display: flex; gap: 10px;">
                            <a href="{{ route('admin.categories.edit', $category) }}" style="color: #38bdf8; text-decoration: none; font-weight: 600;">Editar</a>
                            
                            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar esta categoría?');" style="margin: 0; padding: 0; background: transparent; box-shadow: none; display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="color: #ef4444; background: none; border: none; font-weight: 600; cursor: pointer; padding: 0; width: auto; font-size: 1rem;">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align: center; padding: 30px; color: #6b7280;">No hay categorías registradas en la base de datos.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
