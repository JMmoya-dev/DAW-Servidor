<?php

/**  @var array $productos */
/**  @var string $titulo */
/*indicación al IDE que estas variables existen y vienen de un archivo externo 
 para evitar falsos errores
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titulo); ?></title>
</head>

<body>
    <pre>
    <!-- impresión de los datos optenidos de vista.php con presentación tabulada-->
        <?php foreach ($productos as $producto => $precio): ?>        
            <p><?= htmlspecialchars(sprintf("     %-7s  %6.2f €", $producto, $precio)) ?><p>
        <?php endforeach; ?>
    </pre>

</body>

</html>