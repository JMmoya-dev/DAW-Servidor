<?php

// 1. Declaración de variables
$edadUsuario = 20;
$tieneCarnet = true;

// 2. Operador Aritmético (+) y Asignación combinada (+=)
$puntosLicencia =  8;
$puntosLicencia += 4; // Suma y asignación ($puntosLicencia pasa a ser 12)

// 3. Operadores de Comparación (>=, ===) y Lógicos (&&)
$esMayorEdad = $edadUsuario >= 18; // Evaluación relacional (true)
$puedeConducir = ($edadUsuario >= 18) && ($tieneCarnet === true); // Comparación estricta y AND lógico (true)

// Salida por pantalla o consola
echo "Apto para conducir: " . ($puedeConducir ? "Sí" : "No") . "\n"; // Concatenación

//si cumple se ejecuta la primera opción después del interrogante.


