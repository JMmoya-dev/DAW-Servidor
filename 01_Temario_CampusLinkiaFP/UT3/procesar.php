<?php
// UT3/procesar.php - Captura, validación y respuesta de la Actividad 1 y 2

// 1. Captura de datos mediante filter_input (Buenas prácticas de DAW)
$nombre   = trim(filter_input(INPUT_POST, 'nombre') ?? '');
$estudios = filter_input(INPUT_POST, 'estudios') ?? '';
$turno    = filter_input(INPUT_POST, 'turno') ?? '';
$acepto   = filter_input(INPUT_POST, 'acepto') ?? '';

// Array para recopilar mensajes de error
$errores = [];

// 2. Validaciones en servidor (Presencia y coincidencia de valores)

// Validación del nombre (obligatorio y solo letras con tildes y espacios)
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
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Formulario</title>
    <link rel="stylesheet" href="css/base.css">
</head>

<body>

    <header>
        <h1>Resultado del Procesamiento</h1>
    </header>

    <main>
        <?php if (!empty($errores)): ?>
            <!-- Bloque de respuesta ante errores de validación -->
            <h2>Errores detectados en la petición:</h2>
            <ul>
                <?php foreach ($errores as $error): ?>
                    <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
                <?php endforeach; ?>
            </ul>
            <p><a href="index.php">Volver al formulario</a></p>

        <?php else: ?>
            <!-- Bloque de respuesta correcta con escape de salida XSS -->
            <h2>Datos procesados correctamente:</h2>
            <p>Nombre: <?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?></p>
            <p>Estudios: <?= htmlspecialchars($estudios, ENT_QUOTES, 'UTF-8') ?></p>
            <p>Turno: <?= htmlspecialchars($turno, ENT_QUOTES, 'UTF-8') ?></p>

            <p><a href="index.php">Enviar otra solicitud</a></p>
        <?php endif; ?>
    </main>

</body>

</html>