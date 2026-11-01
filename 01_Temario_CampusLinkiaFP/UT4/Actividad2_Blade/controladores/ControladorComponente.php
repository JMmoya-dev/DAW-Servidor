<?php

/**
 * CONTROLADOR: ControladorComponente
 *
 * Objetivo: ser el intermediario entre el Modelo y la Vista.
 * Pide los datos al Modelo y se los pasa a la Vista mediante Blade.
 * No contiene SQL ni HTML.
 */

use Jenssegers\Blade\Blade;

class ControladorComponente
{
    /** @var Componente Modelo que le proporciona los datos */
    private Componente $modelo;

    /** @var Blade Motor de plantillas que procesa las vistas */
    private Blade $blade;

    /**
     * @param Componente $modelo Modelo recibido desde index.php
     * @param Blade      $blade  Motor de plantillas recibido desde index.php
     */
    public function __construct(Componente $modelo, Blade $blade)
    {
        $this->modelo = $modelo;
        $this->blade  = $blade;
    }

    // Función que obtiene todos los componentes del modelo y los pasa a la vista para su renderizado

    public function listarComponentes(): void
    {
        $componentes = $this->modelo->obtenerTodos();
        echo $this->blade->render('listado', ['componentes' => $componentes]);
    }
}
