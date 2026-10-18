<?php

/**
 * UT3: Configuración e inicio de sesión segura
 */

// Parámetros de seguridad para la cookie de sesión

session_set_cookie_params([
    'lifetime' => 0,          // Expira al cerrar el navegador
    'path'     => '/',        // Restringido al directorio de la UT3
    'domain'   => '',         // Dominio por defecto (localhost)
    'secure'   => false,      // Cambiar a true si se utiliza HTTPS
    'httponly' => true,       // Protección XSS
    'samesite' => 'Strict'    // Protección CSRF
]);

// Inicio de la sesión
session_start();
