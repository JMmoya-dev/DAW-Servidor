<?php

/**
 * Controlador de Componente.
 *
 * Coordina el Modelo y la Vista: pide los datos al modelo
 * y se los pasa a la vista para mostrarlos.
 */
class ComponenteControlador
{
    /**
     * @var Componente Modelo con los tipos, campos y validaciones.
     */
    private $modelo;

    /**
     * @param Componente $modelo Modelo que usará el controlador.
     */
    public function __construct($modelo)
    {
        $this->modelo = $modelo;
    }

    /**
     * Muestra el formulario con los tipos de componente disponibles.
     *
     * @return void
     */
    public function mostrarFormulario()
    {
        $tipos = $this->modelo->obtenerTipos();
        $camposAdicionales = $this->modelo->obtenerCamposAdicionales();
        include 'vistas/formulario.php';
    }
    /**
     * Procesa los datos enviados por el formulario.
     * Solo acepta el método POST. Valida los datos con el modelo
     * y muestra el resultado con la vista respuesta.
     *
     * @return void
     */
    public function procesarFormulario()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            echo '<p class="error">Petición no válida.</p>';
            return;
        }

        $datos = $_POST;
        $errores = $this->modelo->validarDatos($datos);
        $camposAdicionales = $this->modelo->obtenerCamposAdicionales();
        include 'vistas/respuesta.php';
    }
}
