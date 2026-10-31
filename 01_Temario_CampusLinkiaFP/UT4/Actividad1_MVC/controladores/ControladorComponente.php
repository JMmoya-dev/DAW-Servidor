<?php

/*
 * CONTROLADOR: ControladorComponente
 *
 * Objetivo: ser el intermediario entre el Modelo y la Vista.
 * Pide los datos al Modelo y se los pasa a la Vista.
 */

class ControladorComponente
{
    private Componente $modelo;

    public function __construct(Componente $modelo)
    {
        $this->modelo = $modelo;
    }

    //función que llama al modelo para obtener los datos y luego llama a la vista para mostrarlos
    public function listarComponentes(): void
    {
        $componentes = $this->modelo->obtenerTodos();
        include 'vistas/listado.php';
    }
}
