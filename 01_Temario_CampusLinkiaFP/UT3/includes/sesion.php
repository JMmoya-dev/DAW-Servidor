<?php

/**
 * UT3: Funcionalidades dinámicas y mantenimiento de estado
 * Configuración centralizada de sesiones y protección CSRF
 */

// 1. Configuración de parámetros de la cookie de sesión (seguridad)
session_set_cookie_params([
    'lifetime' => 0,
    'path'     => '/',
    'domain'   => '',
    'secure'   => false, // Cambiar a true si se utiliza HTTPS
    'httponly' => true,
    'samesite' => 'Strict'
]);

// 2. Inicio de la sesión
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 3. Regeneración de ID de sesión para prevenir fijación de sesión
if (!isset($_SESSION['iniciada'])) {
    session_regenerate_id(true);
    $_SESSION['iniciada'] = true;
}

// 4. Generación del token Anti-CSRF si no existe en la sesión
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
