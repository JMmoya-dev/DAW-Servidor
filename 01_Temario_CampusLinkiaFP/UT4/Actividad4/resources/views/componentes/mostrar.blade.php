{{-- vista de un solo componente filtrado por id--}}
@extends('layouts.principal')

@section('titulo', 'Detalle del componente')

@section('contenido')
    <h2>Detalle del componente</h2>

    <ul>
        <li><strong>Id:</strong> {{ $componente->id }}</li>
        <li><strong>Nombre:</strong> {{ $componente->nombre }}</li>
        <li><strong>Tipo:</strong> {{ $componente->tipo }}</li>
        <li><strong>Precio:</strong> {{ $componente->precio }} €</li>
    </ul>

    <a href="{{ route('componentes.listar') }}">Volver al listado</a>
@endsection

