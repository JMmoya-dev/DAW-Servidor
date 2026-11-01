{{--
  VISTA: listado
  Objetivo: mostrar la lista de componentes de PC.
  Hereda del layout "principal" y rellena sus huecos "titulo" y "contenido".
  Variable recibida desde el Controlador: $componentes (array de componentes).
--}}

@extends('layouts.principal')

@section('titulo', 'Componentes de PC')

@section('contenido')
    <h2>Componentes de PC</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Precio</th>
        </tr>
        @foreach ($componentes as $componente)
            <tr>
                {{-- {{ }} escapa el contenido automáticamente (evita XSS) --}}
                <td>{{ $componente['nombre'] }}</td>
                <td>{{ $componente['tipo'] }}</td>
                <td>{{ number_format($componente['precio'], 2, ',', '.') }} €</td>
            </tr>
        @endforeach
    </table>
@endsection




