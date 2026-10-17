<?php

$lista = ["casa", "coche", "mesa", "silla", 7]; //Array
echo gettype($lista); //Obtener tipo de dato
print_r($lista); // impresión arrays



echo "<pre>"; // imprime en formato lista.
print_r($lista);
echo "</pre>";

echo "<pre>"; 
var_dump($lista); // imprime en formato lista (+info)
echo "<pre>";
array_push($lista, "moto");


print_r($lista);


