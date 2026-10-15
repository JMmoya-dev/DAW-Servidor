<?php

//Variables
$kilos = 3;
$precioPorKilo = 2.0; // en €

// --- Uso de las funciones ---

// Paso de variables por valor (se envían copias de los datos)

$precioBase = calcularPrecioSinIva($kilos, $precioPorKilo);
$precioFinal = calcularPrecioConIva($precioBase);


echo "<pre>";

// %-20s  -> Reserva 20 caracteres para el texto, alineado a la izquierda
// %8.2f  -> Reserva 8 caracteres para el número, con 2 decimales, alineado a la derecha

printf("%-24s %-12s\n", "Concepto", "Importe");
printf("--------------------------------------------\n");

printf("%-20s %9.2f €\n", "Precio sin IVA:", $precioBase);
printf("%-20s %8.2f €\n", "Precio con IVA (21%):", $precioFinal);

echo "</pre>";


// ---------FUNCIONES POR VALOR------------

// Función 1: Calcula el precio base (sin IVA)
function calcularPrecioSinIva(float $kilos, float $precioKilo): float
{
    return $kilos * $precioKilo;
}

// Función 2: Calcula el precio final aplicando un 21% de IVA
function calcularPrecioConIva(float $precioSinIva): float
{
    return $precioSinIva * 1.21;
}
