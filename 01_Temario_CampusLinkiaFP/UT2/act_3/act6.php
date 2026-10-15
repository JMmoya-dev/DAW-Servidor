<?php
/* 1. EJEMPLO CON FOR: 
Usamos 'for' cuando sabemos exactamente cuántas iteraciones (vueltas) queremos dar.
Ejemplo: Asignar un número de taquilla a 4 trabajadores nuevos (del 1 al 4). */

echo "--------- Asignación de taquillas (for) ---------<br><br>";

for ($i = 1; $i <= 4; $i++) {
    echo "Trabajador número {$i}: Asignada taquilla #{$i}<br>";
}

echo "<br>";


/* 2. EJEMPLO CON FOREACH: Trabajar con una lista de empleados y sus roles
Usamos 'foreach' para recorrer arrays sin preocuparnos por índices numéricos ni contadores.
Ejemplo: Array asociativo donde la clave (key) es el nombre y el valor (value) es su rol. */

$plantilla = [
    "Laura" => "Encargada de sección",
    "Carlos" => "Reponedor",
    "Marta" => "Cajera",
    "David" => "Mozo de almacén"
];

echo "--- Plantilla de la frutería y roles (foreach) ----<br><br>";

foreach ($plantilla as $nombre => $rol) {
    echo "{$nombre} trabaja como: <strong>{$rol}</strong>.<br>";
}

