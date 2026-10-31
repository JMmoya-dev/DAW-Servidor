<?php

/**
 * CONEXIÓN A LA BASE DE DATOS
 *
 * Crea el objeto PDO ($bd) que usará el Modelo para consultar datos.
 * Datos de XAMPP: usuario "root", sin contraseña, MySQL en el puerto 3307 para no crear
 * conflictos con Workbench.
 */

$bd = new PDO(
    'mysql:host=localhost;port=3307;dbname=bd_tiendaInfo;charset=utf8mb4',
    'root',
    ''
);

// Si hay un error SQL, PHP lanzará una excepción visible en vez de fallar en silencio
$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
