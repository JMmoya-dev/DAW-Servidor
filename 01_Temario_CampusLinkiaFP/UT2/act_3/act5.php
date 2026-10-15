<?php
/* 1. EJEMPLO CON WHILE: Pesando manzanas en la báscula
Queremos llenar una bolsa de manzanas hasta llegar al peso objetivo (2000 gramos).
*/
$pesoActual = 0;
$pesoObjetivo = 2000;
$pesoManzana = 350; // Cada manzana pesa 350g

echo "----------- Inicio del pesado (while) -----------<br><br>";

// Mientras NO hayamos alcanzado el peso objetivo, seguimos añadiendo manzanas
while ($pesoActual < $pesoObjetivo) {
    $pesoActual += $pesoManzana;
    echo "Añadida manzana de {$pesoManzana}g. Peso total: {$pesoActual}g.<br>";
}

echo "<br>¡Bolsa lista! Peso final: <strong>{$pesoActual}g.</strong><br><br>";


/* 2. EJEMPLO CON DO-WHILE: Selección de fruta de calidad
 El frutero revisa la bolsa de fruta. Se asegura de revisar AL MENOS UNA pieza,
 y sigue revisando mientras encuentre piezas con algún toque o defecto.
 */

$piezasConDefecto = 2; // Número de frutas pochas que quedan por retirar

echo "-------- Control de calidad (do-while) -------- <br><br>";

do {
    if ($piezasConDefecto > 0) {
        echo "Revisando fruta...  Pieza defectuosa encontrada y retirada.<br>";
        $piezasConDefecto--;
    }
    if ($piezasConDefecto == 0) {
        echo "<br>Piezas en perfecto estado. <strong>¡Bolsa revisada e impecable!</strong><br>";
    }

    // Repite el proceso MIENTRAS queden piezas defectuosas por retirar
} while ($piezasConDefecto > 0);
