{{-- formulario para crear un componente --}}

@extends('layouts.principal')

@section('titulo', 'Nuevo componente')

@section('contenido')
    <h2>Nuevo componente</h2>

    <form action="{{ route('componentes.guardar') }}" method="POST">
        {{-- protección CSRF obligatoria en formularios POST --}}
        @csrf

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
        @error('nombre')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="tipo">Tipo</label>
        <select id="tipo" name="tipo">
            <option value="">-- Elige un tipo --</option>
            <option value="Ratón" {{ old('tipo') == 'Ratón' ? 'selected' : '' }}>Ratón</option>
            <option value="Teclado" {{ old('tipo') == 'Teclado' ? 'selected' : '' }}>Teclado</option>
            <option value="Monitor" {{ old('tipo') == 'Monitor' ? 'selected' : '' }}>Monitor</option>
            <option value="Altavoces" {{ old('tipo') == 'Altavoces' ? 'selected' : '' }}>Altavoces</option>
        </select>
        @error('tipo')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="precio">Precio (€)</label>
        <input type="number" id="precio" name="precio" step="0.01" value="{{ old('precio') }}">
        @error('precio')
            <p class="error">{{ $message }}</p>
        @enderror

        <p>
            <button type="submit" class="boton">Guardar</button>
            <a href="{{ route('componentes.listar') }}">Cancelar</a>
        </p>
    </form>
@endsection




