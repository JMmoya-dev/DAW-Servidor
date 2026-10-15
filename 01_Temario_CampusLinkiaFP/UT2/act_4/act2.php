<?php

// Variables originales | Unidades en Kg
$stock = 50;
$ventas = 10;
$venta = 5;

echo "<strong>Estado inicial:</strong><br><br>";
echo "Stock: {$stock} kg | Total ventas: {$ventas} kg<br><br>";

// 1. Aplicamos la primera función por referencia (modifica $stock)
descontarStock($stock, $venta);

// 2. Aplicamos la segunda función por referencia (modifica $ventas)
acumularVentas($ventas, $venta);

echo "<strong>Tras vender {$venta} kg:</strong><br><br>";
echo "Stock actualizado: {$stock} kg<br>";
echo "Total ventas actualizado: {$ventas} kg";




// FUNCIONES POR REFERENCIA (&)

// Reduce directamente el stock disponible de la variable original.
function descontarStock(int &$stock, int $cantidad): void
{
    $stock -= $cantidad;
}

// Incrementa directamente el registro acumulado de ventas en la variable original.
function acumularVentas(int &$ventas, int $cantidad): void
{
    $ventas += $cantidad;
}
