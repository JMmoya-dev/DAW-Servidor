<?php

use App\Http\Controllers\ControladorComponente;
use Illuminate\Support\Facades\Route;

// página de inicio de Laravel (ya venía hecha)
Route::get('/', function () {
    return view('welcome');
});

// rutas de componentes

// estática: lista todos los componentes
Route::get('/componentes', [ControladorComponente::class, 'listar'])->name('componentes.listar');

// dinámica: muestra un componente según su id
Route::get('/componentes/{id}', [ControladorComponente::class, 'mostrar'])->name('componentes.mostrar');
