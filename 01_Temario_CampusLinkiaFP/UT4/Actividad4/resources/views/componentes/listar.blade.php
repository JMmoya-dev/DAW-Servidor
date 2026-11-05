{{-- vista del listado de componentes --}}
@extends('layouts.principal')

@section('titulo', 'Listado de componentes')

@section('contenido')
    <h2>Listado de componentes</h2>

    {{-- botón para ir al formulario de alta --}}
    <p><a href="{{ route('componentes.crear') }}" class="boton">Nuevo componente</a></p>

    @if (count($componentes) > 0)
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($componentes as $componente)
                    <tr>
                        <td>{{ $componente->id }}</td>
                        <td>{{ $componente->nombre }}</td>
                        <td>{{ $componente->tipo }}</td>
                        <td>{{ $componente->precio }} €</td>
                        <td>
                            {{-- enlace a la ruta dinámica con el id --}}
                            <a href="{{ route('componentes.mostrar', $componente->id) }}" class="boton">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay componentes guardados.</p>
    @endif
@endsection