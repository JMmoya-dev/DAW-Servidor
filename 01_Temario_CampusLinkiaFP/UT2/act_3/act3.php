<?php
// Variables
$diaSemana = "Miércoles";
$titulo = "Plato del día en nuestro restaurante";

switch ($diaSemana) {
    case "Lunes":
        $menu = "Lunes: Lentejas estofadas";
        break;
    case "Martes":
        $menu = "Martes: Pollo al horno";
        break;
    case "Miércoles":
        $menu = "Miércoles: Paella de marisco";
        break;
    case "Jueves":
        $menu = "Jueves: Crema de verduras y pescado";
        break;
    case "Viernes":
        $menu = "Viernes: Hamburguesa completa";
        break;
    default:
        $menu = "Fin de semana: SOLO CARTA, no hay plato del día";
        break;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENÚ</title>
</head>

<body>
    <h2><?= htmlspecialchars($titulo) ?></h2>
    <p><?= htmlspecialchars($menu) ?></p>
</body>

</html>