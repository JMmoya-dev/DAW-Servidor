<?php

/**
 * PUNTO DE ENTRADA
 *
 * Carga los archivos, los conecta entre sí y ejecuta el Controlador.
 * Flujo: index.php -> Controlador -> Modelo -> Base de datos -> Vista (Blade)
 */

use Jenssegers\Blade\Blade;

require 'vendor/autoload.php';                       // Librerías de Composer (Blade)
require 'config/database.php';                       // Crea $bd (conexión)
require 'modelos/Componente.php';                    // Clase del Modelo
require 'controladores/ControladorComponente.php';   // Clase del Controlador

$modelo      = new Componente($bd);                              // El Modelo recibe la conexión
$blade       = new Blade(__DIR__ . '/vistas', __DIR__ . '/cache'); // Carpeta de vistas y de caché
$controlador = new ControladorComponente($modelo, $blade);       // El Controlador recibe Modelo y Blade

$controlador->listarComponentes();                   // Ejecuta la función que obtiene los datos del Modelo y los pasa a la Vista para su renderizado.
