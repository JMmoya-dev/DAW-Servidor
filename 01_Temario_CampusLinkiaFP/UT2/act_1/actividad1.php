<?php

// 1. Declaración de variables y Operadores Aritméticos
$precioProducto = 50;
$cantidad = 2;
$subtotal = $precioProducto * $cantidad; // Multiplicación ($subtotal = 100)

// 2. Operadores de Asignación (+=)
$impuesto = 21;
$total = $subtotal;
$total += $impuesto; // Suma y asignación ($total = $total + $impuesto -> 121€)

// 3. Variables de control y Operadores de Comparación (>=, ===)
$edadUsuario = 20;
$esMayorDeEdad = $edadUsuario >= 18; // Evaluación relacional (true)
$tieneSaldoSuficiente = $total === 121; // Comparación estricta de valor y tipo (true)

// 4. Operadores Lógicos (&&)
$compraPermitida = $esMayorDeEdad && $tieneSaldoSuficiente; // AND lógico (true)

// Salida de resultado
echo " El total de la compra es: " . $total . "€"; // Concatenación

