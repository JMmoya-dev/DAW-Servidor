<!--
  VISTA: listado.php
  Objetivo: mostrar la lista de componentes de PC.     
  -->
<?php

/** @var array $componentes Lista de componentes recibida desde el Controlador 
 * (para que no salte un error de PHP, se declara la variable aunque no se le asigne valor)
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Componentes de PC</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <h1>Componentes de PC</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Precio</th>
        </tr>
        <?php foreach ($componentes as $componente): ?>
            <tr>
                <!-- htmlspecialchars evita que se inyecte código HTML (XSS) -->
                <td><?= htmlspecialchars($componente['nombre']) ?></td>
                <td><?= htmlspecialchars($componente['tipo']) ?></td>
                <td><?= number_format($componente['precio'], 2, ',', '.') ?> €</td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>