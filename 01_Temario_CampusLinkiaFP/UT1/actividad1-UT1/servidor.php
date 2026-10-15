<?php
// Obtener el método de la petición
$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo === 'GET') {
    // Respuesta a una petición GET
    $nombre = $_GET['nombre'] ?? 'Invitado';
    echo "<h1>Petición GET recibida</h1>";
    echo "<p>Hola, " . htmlspecialchars($nombre) . ". Has realizado una consulta GET.</p>";
} elseif ($metodo === 'POST') {
    // Respuesta a una petición POST
    $usuario = $_POST['usuario'] ?? 'Desconocido';
    echo "<h1>Petición POST recibida</h1>";
    echo "<p>Datos procesados correctamente para el usuario: " . htmlspecialchars($usuario) . "</p>";
} else {
    // Por si envían otro método (PUT, DELETE, etc.)
    http_response_code(405);
    echo "Método no permitido";
}
