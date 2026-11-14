<?php
require_once __DIR__ . '/config/Conexion.php';
require_once __DIR__ . '/modelos/Componente.php';

$mensaje = '';
$componentes = []; // vacío por si falla algo
$total = 0;

try {
    $pdo = Conexion::conectar();
    $modelo = new Componente($pdo); // el modelo hace todo el SQL

    // paginación: filas por página
    $porPagina = 5;
    $total = $modelo->contarTodos();
    $totalPaginas = max(1, (int) ceil($total / $porPagina));

    // validar la página del GET: entero entre 1 y $totalPaginas (si no, la 1)
    $pagina = filter_var($_GET['pagina'] ?? 1, FILTER_VALIDATE_INT, [
        'options' => ['default' => 1, 'min_range' => 1, 'max_range' => $totalPaginas]
    ]);

    // filas que hay que saltar
    $desplazamiento = ($pagina - 1) * $porPagina;
    $componentes = $modelo->obtenerPagina($porPagina, $desplazamiento);

    $mensaje = "Total de componentes: $total (página $pagina de $totalPaginas)";
} catch (PDOException $e) {
    // error en una consulta: detalle al log, mensaje genérico en pantalla
    error_log("Error SQL: " . $e->getMessage());
    $mensaje = "Error al consultar los datos.";
} catch (Exception $e) {
    // error de conexión (ya viene con mensaje genérico de Conexion)
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

        <!-- navegación entre páginas -->
        <nav class="paginacion">
            <?php if ($pagina > 1): ?>
                <a href="?pagina=<?= $pagina - 1 ?>">&laquo; Anterior</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
                <?php if ($i === $pagina): ?>
                    <!-- página actual: sin enlace -->
                    <span class="actual"><?= $i ?></span>
                <?php else: ?>
                    <a href="?pagina=<?= $i ?>"><?= $i ?></a>
                <?php endif; ?>
            <?php endfor; ?>

            <?php if ($pagina < $totalPaginas): ?>
                <a href="?pagina=<?= $pagina + 1 ?>">Siguiente &raquo;</a>
            <?php endif; ?>
        </nav>



    <?php endif; ?>
</body>

</html>