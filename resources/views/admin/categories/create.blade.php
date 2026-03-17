@extends('layouts.admin')

@section('title', 'Nueva Categoría')

@section('header_title', 'Categorías')

@section('content')

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h3 style="color: #4b5563; font-weight: 600;">Agregar Nueva Categoría</h3>
        <a href="{{ route('admin.categories.index') }}" class="badge badge-warning" style="text-decoration: none; padding: 10px 15px; font-size: 0.9rem;">Volver</a>
    </div>

    @if($errors->any())
        <div style="padding: 15px; background-color: #fee2e2; color: #991b1b; border-radius: 8px; margin-bottom: 20px;">
            <ul style="margin-left: 20px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); max-width: 600px;">
        <form action="{{ route('admin.categories.store') }}" method="POST" style="background: transparent; padding: 0; box-shadow: none;">
            @csrf

            <label for="name" style="color: #4b5563;">Nombre de la Categoría</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required 
                   style="background: #f9fafb; color: #1f2937; border: 1px solid #d1d5db; width: 100%;" 
                   placeholder="Ej: Electrónica">

            <label for="description" style="color: #4b5563; margin-top: 15px;">Descripción</label>
            <textarea name="description" id="description" rows="4" 
                      style="background: #f9fafb; color: #1f2937; border: 1px solid #d1d5db; width: 100%;" 
                      placeholder="Breve descripción de la categoría (Opcional)">{{ old('description') }}</textarea>

            <button type="submit" style="background-color: #38bdf8; color: white; padding: 12px 20px; border: none; border-radius: 8px; font-weight: bold; cursor: pointer; width: 100%; margin-top: 20px;">Guardar Categoría</button>
        </form>
    </div>

@endsection
