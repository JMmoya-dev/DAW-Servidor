<?php
require_once __DIR__ . '/config/Conexion.php';

$mensaje = '';
$componentes = []; // vacío por si falla la conexión

try {
    $pdo = Conexion::conectar();

    // consulta preparada: marcador :precioMax en vez de concatenar el valor
    $sql = "SELECT nombre, tipo, precio
            FROM componentes
            WHERE precio <= :precioMax
            ORDER BY precio";

    $consulta = $pdo->prepare($sql);              // 1. preparar (solo la estructura)
    $consulta->execute(['precioMax' => 500]);     // 2. ejecutar (enviar el dato aparte)
    $componentes = $consulta->fetchAll();         // FETCH_ASSOC por defecto

    $mensaje = "Conexión segura establecida. Componentes encontrados: " . count($componentes);
} catch (Exception $e) {
    // mensaje genérico, el error real está en el log
    $mensaje = $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <title>UT5 - Actividad 1</title>
</head>

<body>
    <h1>Conexión segura con PDO</h1>
    <!-- escapar siempre lo que se muestra -->
    <p><?= htmlspecialchars($mensaje) ?></p>


    <?php if (!empty($componentes)): ?>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Precio</th>
            </tr>
            <?php foreach ($componentes as $componente): ?>
                <tr>
                    <!-- htmlspecialchars evita XSS -->
                    <td><?= htmlspecialchars($componente['nombre']) ?></td>
                    <td><?= htmlspecialchars($componente['tipo']) ?></td>
                    <!-- formato español: 1.234,50 € -->
                    <td><?= number_format($componente['precio'], 2, ',', '.') ?> €</td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>

</html>