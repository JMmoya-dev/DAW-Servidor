<?php
$host = '127.0.0.1';
$db = 'tienda';
$user = 'usuario';
$pass = '123';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Manejo de errores con excepciones
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Modo de obtención de resultados como array asociativo
    PDO::ATTR_EMULATE_PREPARES => false, // Deshabilita la emulación de consultas preparadas
];

try {
    $dsn = "mysql:host=$host;port=3307;dbname=$db;charset=$charset";
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
