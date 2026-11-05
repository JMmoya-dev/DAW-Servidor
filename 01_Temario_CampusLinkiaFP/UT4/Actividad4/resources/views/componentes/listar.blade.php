{{-- Vista del listado de componentes --}}

@extends('layouts.principal')

@section('titulo', 'Listado de componentes')

@section('contenido')
    <h2>Listado de componentes</h2>

    @if (count($componentes) > 0)
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($componentes as $componente)
                    <tr>
                        <td>{{ $componente->id }}</td>
                        <td>{{ $componente->nombre }}</td>
                        <td>{{ $componente->tipo }}</td>
                        <td>{{ $componente->precio }} €</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay componentes guardados.</p>
    @endif
@endsection