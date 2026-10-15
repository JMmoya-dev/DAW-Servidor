

<?php
$usuario_esta_logueado = true;
$usuario_tiene_permiso = true;




if ($usuario_esta_logueado) {
    if ($usuario_tiene_permiso) {
        echo "<p>Acceso concedido a funciones avanzadas.</p>";
    } else {
        echo "<p>Acceso limitado. Contacta con el administrador.</p>";
    }
} else {
    echo "<p>Por favor, inicia sesión.</p>";
}
