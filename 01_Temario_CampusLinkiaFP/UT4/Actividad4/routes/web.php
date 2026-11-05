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

// estática: formulario para crear (tiene que ir antes de la de {id}) sinó la ruta de {id} se come la de crear y da error 404.

Route::get('/componentes/crear', [ControladorComponente::class, 'crear'])->name('componentes.crear');


// POST: guarda el componente nuevo (misma URL que el listado, otro método)
Route::post('/componentes', [ControladorComponente::class, 'guardar'])->name('componentes.guardar');


// dinámica: muestra un componente según su id
Route::get('/componentes/{id}', [ControladorComponente::class, 'mostrar'])->name('componentes.mostrar');
