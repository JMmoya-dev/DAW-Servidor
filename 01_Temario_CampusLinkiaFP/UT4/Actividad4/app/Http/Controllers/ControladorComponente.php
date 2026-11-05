<?php

namespace App\Http\Controllers;

use App\Models\Componente;
use Illuminate\View\View;

/**
 * Controlador de componentes.
 */
class ControladorComponente extends Controller
{
    /**
     * Lista todos los componentes.
     *
     * @return View
     */
    public function listar(): View
    {
        // pido todos los componentes al modelo
        $componentes = Componente::all();

        return view('componentes.listar', compact('componentes'));
    }

    /**
     * Muestra un componente por su id.
     *
     * @param mixed $id
     * @return View
     */
    public function mostrar($id): View
    {
        // si el id no existe sale error 404
        $componente = Componente::findOrFail($id);

        return view('componentes.mostrar', compact('componente'));
    }
}
