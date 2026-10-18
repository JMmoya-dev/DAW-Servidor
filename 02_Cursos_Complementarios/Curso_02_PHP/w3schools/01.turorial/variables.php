<?php

$finDeMes = true;
$articuloDeteriorado = false;

$normal = 22;
$oferta = 20;
$devaluado = 15;

if ($finDeMes) {
    $precio = "oferta";
} else {
    if ($articuloDeteriorado) {
        $precio = "devaluado";
    } else {
        $precio = "normal";
    }
}
//el valor es el de la variable asociada a ese nombre. 
echo "El precio seleccionado es: " . $$precio . "<br>";


// mismo caso con array, ver más adelante
$precios = [
    "normal" => 22,
    "oferta" => 20,
    "devaluado" => 15
];

if ($finDeMes) {
    $tipo = "oferta";
}

echo "El precio es: " . $precios[$tipo]. "<br>";

//CONSTANTES
define("NOMBRE", "Jose Mª");
echo NOMBRE;

