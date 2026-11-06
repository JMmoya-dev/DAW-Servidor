<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Middleware comprueba que el id de la URL sea un número válido.
 */
class ComprobarId
{
    /**
     * IMPORTANTE: Se ejecuta antes del controlador.
     *
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // capturamos el {id} de la URL
        $id = $request->route('id');

        // si no son solo números o es 0, cortamos aquí con un 404
        if (! ctype_digit((string) $id) || $id == 0) {
            abort(404);
        }

        // si está bien, sigue hacia el controlador
        return $next($request);
    }
}


