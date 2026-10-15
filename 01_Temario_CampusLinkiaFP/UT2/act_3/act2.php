<?php

//Variables
$presupuestoMaximo = 500; // Lo que quiere gastarse el usuario como máximo
$modeloGrafica = "RTX 4070"; // Modelo disponible
$titulo = "Targétas Gráficas";

// CONDICIONALES ANIDADOS
if ($presupuestoMaximo >= 600) {
    //El presupuesto permite aspirar a gama alta
    if ($modeloGrafica === "RTX 4070") {
        $resultado = "Compra equilibrada: Dentro de presupuesto.";
    } else {
        $resultado = "Puedes permitirte modelos de máxima gama.";
    }
} else {
    //Presupuesto ajustado (menos de 600 €)
    if ($modeloGrafica === "RTX 4070") {
        $resultado = "Se sale de presupuesto: Es una gráfica cara para tu límite actual.";
    } else {
        $resultado = "Ajustado a tu presupuesto disponible.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Targétas Gráficas</title>
</head>

<body>
    <h3><?= htmlspecialchars($titulo) ?></h3>
    <p><?= htmlspecialchars($resultado) ?></p>
</body>

</html>