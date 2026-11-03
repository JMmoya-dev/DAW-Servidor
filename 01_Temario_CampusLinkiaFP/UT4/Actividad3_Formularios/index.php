<?php

/**
 * Archivo de entrada: carga el modelo y el controlador
 * y muestra el formulario.
 */
require 'modelos/Componente.php';
require 'controladores/ComponenteControlador.php';

$modelo = new Componente();
$controlador = new ComponenteControlador($modelo);
$controlador->mostrarFormulario();
