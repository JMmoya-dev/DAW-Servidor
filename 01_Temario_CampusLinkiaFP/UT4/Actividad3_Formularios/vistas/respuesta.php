<?php

/**
 * Vista de la respuesta del servidor.
 * Muestra los errores de validación o el resumen del componente recibido.
 *
 * Variables que le pasa el controlador:
 * @var array $errores           Mensajes de error (vacío si todo es correcto).
 * @var array $datos             Datos recibidos del formulario.
 * @var array $camposAdicionales Campos extra de cada tipo.
 */
?>
<?php if (!empty($errores)): ?>
    <?php foreach ($errores as $error): ?>
        <p class="error"><?= htmlspecialchars($error) ?></p>
    <?php endforeach; ?>
<?php else: ?>
    <p class="exito">Componente recibido correctamente.</p>
    <ul>
        <li>Tipo: <?= htmlspecialchars(ucfirst($datos['tipo'])) ?></li>
        <li>Nombre: <?= htmlspecialchars($datos['nombre']) ?></li>
        <li>Precio: <?= htmlspecialchars($datos['precio']) ?> €</li>
        <?php foreach ($camposAdicionales[$datos['tipo']] as $campo): ?>
            <li><?= htmlspecialchars(ucfirst($campo)) ?>: <?= htmlspecialchars($datos[$campo]) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

