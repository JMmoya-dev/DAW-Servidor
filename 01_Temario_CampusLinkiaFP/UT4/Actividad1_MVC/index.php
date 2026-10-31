<?php

/*
 * RAIZ: index.php
 *
 * Carga todos los archivos, las conecta entre sí y ejecuta el Controlador.
 * Flujo: index.php -> Controlador -> Modelo -> Base de datos -> Vista
 */
require 'config/database.php';                       // Crea $bd (conexión)
require 'modelos/Componente.php';                    // Clase del Modelo (consulta a la base de datos)
require 'controladores/ControladorComponente.php';   // Clase del Controlador (intermediario entre Modelo y Vista)

$modelo      = new Componente($bd);                  // El Modelo recibe la conexión
$controlador = new ControladorComponente($modelo);   // El Controlador recibe el Modelo

$controlador->listarComponentes();                   // Ejecuta la acción