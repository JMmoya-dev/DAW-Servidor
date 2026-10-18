<?php

/**
 * UT3: Funcionalidades dinámicas y mantenimiento de estado
 * Procesamiento de formulario y gestión de sesión segura
 */

// 2. Carga e inicio de la configuración de sesión centralizada
require_once 'includes/sesion.php';

// 3. Captura y saneamiento de datos de entrada
$nombre   = trim(filter_input(INPUT_POST, 'nombre') ?? '');
$estudios = filter_input(INPUT_POST, 'estudios') ?? '';
$turno    = filter_input(INPUT_POST, 'turno') ?? '';
$acepto   = filter_input(INPUT_POST, 'acepto') ?? '';

$errores = [];

// Captura y validación del token Anti-CSRF
$token_recibido = filter_input(INPUT_POST, 'csrf_token') ?? '';

if (empty($token_recibido) || !hash_equals($_SESSION['csrf_token'] ?? '', $token_recibido)) {
    $errores[] = 'Petición no válida o caducada (error CSRF).';
}

// 4. Validaciones de datos en servidor
if (empty($nombre)) {
    $errores[] = 'El campo nombre es obligatorio.';
} elseif (!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/u', $nombre)) {
    $errores[] = 'El nombre solo puede contener letras y espacios.';
}

if (empty($estudios)) {
    $errores[] = 'Debes seleccionar un nivel de estudios.';
}

if (empty($turno)) {
    $errores[] = 'Debes seleccionar un turno.';
}

if ($acepto !== 'si') {
    $errores[] = 'Debes aceptar los términos y condiciones.';
}

// 5. Almacenamiento en sesión tras validación correcta
if (empty($errores)) {
    $_SESSION['usuario'] = [
        'nombre'   => $nombre,
        'estudios' => $estudios,
        'turno'    => $turno,
        'acepto'   => $acepto
    ];
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Procesamiento</title>
    <link rel="stylesheet" href="css/base.css">
</head>

<body>

    <header>
        <h1>Resultado del Procesamiento</h1>
    </header>

    <main>
        <?php if (!empty($errores)): ?>
            <!-- Muestra de errores de validación -->
            <h2>Errores detectados en la petición:</h2>
            <ul>
                <?php foreach ($errores as $error): ?>
                    <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
                <?php endforeach; ?>
            </ul>
            <p><a href="index.php">Volver al formulario</a></p>

        <?php else: ?>
            <!-- Muestra de datos persistidos en la sesión -->
            <h2>Datos procesados y guardados en sesión:</h2>
            <p>Nombre: <?= htmlspecialchars($_SESSION['usuario']['nombre'], ENT_QUOTES, 'UTF-8') ?></p>
            <p>Estudios: <?= htmlspecialchars($_SESSION['usuario']['estudios'], ENT_QUOTES, 'UTF-8') ?></p>
            <p>Turno: <?= htmlspecialchars($_SESSION['usuario']['turno'] === 'mañana' ? 'Mañana' : 'Tarde', ENT_QUOTES, 'UTF-8') ?></p>

            <p><a href="index.php">Volver al formulario</a></p>
        <?php endif; ?>
    </main>

</body>

</html>