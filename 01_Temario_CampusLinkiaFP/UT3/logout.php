<?php

/**
 * UT3: Funcionalidades dinámicas y mantenimiento de estado
 * Destrucción de la sesión
 */

require_once 'includes/sesion.php';

// 1. Limpia las variables de sesión de la memoria ("desconfigurar", "desasignar" o "quitar el valor")
session_unset();

// 2. Destruye la sesión en el servidor
session_destroy();

// 3. Redirige al formulario principal
header("Location: index.php");
exit;
