<?php

// Lógica de datos (Simulación de sesión de usuario)
$usuario = "Jose Mª";
$esAdministrador = false;
$mensajeNotificación = "Tienes 3 mensajes pendientes";
$titulo = "código embebido";
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($titulo); ?></title> <!--titulo con código embebido -->
</head>

<body>

    <main>
        <!-- Estructura condicional embebida para evaluar el rol -->
        <?php if ($esAdministrador): ?>
            <div class="panel-admin">
                <h2>Acceso Concedido: Panel de Administración</h2>
                <!--podemos sustituir el php por el (=)-->
                <p>Notificación: <?= htmlspecialchars($mensajeNotificación); ?></p>
                <button>Gestionar Usuarios</button> <!-- botón sin función solo de presentación -->
            </div>
        <?php else: ?>
            <div class="panel-usuario">
                <h2>Acceso Limitado: Perfil de Usuario</h2>
                <p>No tienes permisos de administración.</p>
            </div>
        <?php endif; ?>
        <!--FIN condicional if-->
    </main>

</body>

</html>