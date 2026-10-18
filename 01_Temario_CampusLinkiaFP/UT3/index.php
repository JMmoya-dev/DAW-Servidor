<?php

/**
 * UT3: Funcionalidades dinámicas y mantenimiento de estado
 * Formulario de entrada con lectura de estado de sesión
 */

require_once 'includes/sesion.php';

// 2. Inicio o recuperación de la sesión existente

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro - UT3</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/formulario.css">
</head>

<body>

    <header>
        <h1>Formulario de Registro</h1>
        <?php if (isset($_SESSION['usuario'])): ?>
            <!-- Lectura de datos persistidos en sesión -->
            <p>Bienvenido/a de nuevo, <strong><?= htmlspecialchars($_SESSION['usuario']['nombre'], ENT_QUOTES, 'UTF-8') ?></strong>.</p>
        <?php endif; ?>
    </header>

    <main>
        <form action="procesar.php" method="post">
            <p>
                <label for="nombre">Nombre completo:</label>
                <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($_SESSION['usuario']['nombre'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
            </p>

            <p>
                <label for="estudios">Nivel de estudios:</label>
                <select id="estudios" name="estudios">
                    <option value="">-- Selecciona una opción --</option>
                    <option value="grado_medio" <?= ($_SESSION['usuario']['estudios'] ?? '') === 'grado_medio' ? 'selected' : '' ?>>CF Grado Medio</option>
                    <option value="grado_superior" <?= ($_SESSION['usuario']['estudios'] ?? '') === 'grado_superior' ? 'selected' : '' ?>>CF Grado Superior</option>
                </select>
            </p>

            <p>
                <span>Turno de preferencia:</span><br>
                <input type="radio" id="mañana" name="turno" value="mañana" <?= ($_SESSION['usuario']['turno'] ?? '') === 'mañana' ? 'checked' : '' ?>>
                <label for="mañana">Mañana</label>

                <input type="radio" id="tarde" name="turno" value="tarde" <?= ($_SESSION['usuario']['turno'] ?? '') === 'tarde' ? 'checked' : '' ?>>
                <label for="tarde">Tarde</label>
            </p>

            <p>
                <input type="checkbox" id="acepto" name="acepto" value="si" <?= ($_SESSION['usuario']['acepto'] ?? '') === 'si' ? 'checked' : '' ?>>
                <label for="acepto">Acepto los términos y condiciones</label>
            </p>

            <button type="submit">Enviar datos</button>
        </form>
    </main>

</body>

</html>