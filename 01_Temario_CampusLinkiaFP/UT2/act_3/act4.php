<?php
// Datos del alumno
$nota = 8.5;
$asistencia = 90; // Porcentaje de asistencia (%)

// 1. CONDICIONALES ANIDADOS: Evaluación final
if ($asistencia >= 80) {
    if ($nota >= 5) {
        $estado = "Aprobado";
    } else {
        $estado = "Suspenso por nota";
    }
} else {
    $estado = "Suspenso por faltas de asistencia";
}

// 2. SWITCH: Mensaje para el alumno según resultado
switch ($estado) {
    case "Aprobado":
        $mensaje = "¡Enhorabuena! Has superado el curso.";
        break;
    case "Suspenso por nota":
        $mensaje = "Debes presentarte a la recuperación del examen.";
        break;
    case "Suspenso por faltas de asistencia":
        $mensaje = "Has perdido el derecho a evaluación continua.";
        break;
    default:
        $mensaje = "Estado del alumno no reconocido.";
        break;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if and switch</title>
</head>

<body>
    <h2>Resultado de la Evaluación</h2>
    <p><strong>Estado:</strong> <?= htmlspecialchars($estado) ?></p>
    <p><strong>Observación:</strong> <?= htmlspecialchars($mensaje) ?></p>
</body>

</html>