<?php

namespace App\Http\Controllers;

use App\Models\Componente;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

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

    /**
     * Muestra el formulario para crear un componente.
     *
     * @return View
     */
    public function crear(): View
    {
        return view('componentes.crear');
    }

    /**
     * Valida los datos del formulario y guarda el componente.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function guardar(Request $request): RedirectResponse
    {
        // reglas según los campos de la tabla
        $reglas = [
            'nombre' => 'required|string|max:100',
            'tipo' => 'required|in:Ratón,Teclado,Monitor,Altavoces',
            'precio' => 'required|numeric|min:0.01|max:900000.00',
        ];

        // mensajes al usuario si algo falla.
        $mensajes = [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede tener más de 100 caracteres.',
            'tipo.required' => 'Tienes que elegir un tipo.',
            'tipo.in' => 'El tipo elegido no es válido.',
            'precio.required' => 'El precio es obligatorio.',
            'precio.numeric' => 'El precio tiene que ser un número.',
            'precio.min' => 'El precio tiene que ser mayor que 0.',
            'precio.max' => 'El precio no puede ser mayor de 900000.00 €.',
        ];

        // si algo falla vuelve al formulario con los errores
        $datos = $request->validate($reglas, $mensajes);

        Componente::create($datos);

        return redirect()->route('componentes.listar')->with('success', 'Componente creado correctamente.');
    }

    /**
     * Borra un componente por su id.
     *
     * @param mixed $id
     * @return RedirectResponse
     */
    public function eliminar($id): RedirectResponse
    {
        // primero compruebo que existe (si no, error 404)
        $componente = Componente::findOrFail($id);

        $componente->delete();

        return redirect()->route('componentes.listar')->with('success', 'Componente eliminado correctamente.');
    }
}
