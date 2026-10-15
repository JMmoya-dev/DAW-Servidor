<?php

// variables
$temperatura = 28;
$titulo = "Información Meteorológica";

// CONDICIONALES ANIDADAS
if ($temperatura >= 20) {
    // temperaturas de 20 grados o más
    if ($temperatura > 30) {
        $clima = "Hace mucho calor.";
    } else {
        $clima = "La temperatura es agradable.";
    }
} else {
    // Si la temperatura es menor de 20 grados
    if ($temperatura < 10) {
        $clima = "Hace mucho frío.";
    } else {
        $clima = "El clima está fresquito.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titulo); ?></title>
</head>

<body>
    <p><?= htmlspecialchars($clima) ?></p>
</body>

</html>