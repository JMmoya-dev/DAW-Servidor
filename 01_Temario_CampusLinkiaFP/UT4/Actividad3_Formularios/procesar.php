<?php

/**
 * Archivo que recibe los datos del formulario (petición AJAX).
 * Carga el modelo y el controlador y delega en el controlador
 * el procesamiento de los datos.
 */
require 'modelos/Componente.php';
require 'controladores/ComponenteControlador.php';

$modelo = new Componente();
$controlador = new ComponenteControlador($modelo);
$controlador->procesarFormulario();
