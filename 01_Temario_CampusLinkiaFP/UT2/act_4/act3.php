<?php

// --- PRUEBA CON TRY-CATCH ---

$totalFactura = 100; // €
$numeroPersonas = 0; // Provocamos el error

try {
    $pagoIndividual = calcularPagoPorPersona($totalFactura, $numeroPersonas);
    echo "Cada persona debe pagar: {$pagoIndividual} €";
} catch (Exception $e) {


    // 1. Registra el mensaje técnico en el log, (por defecto del servidor)
    error_log($e->getMessage() . PHP_EOL, 3, "mi_log.txt"); // End Of Line + salto de línea

    // 2. Muestra el error por pantalla amigable y seguro para el usuario.
    echo "Ha ocurrido un error al procesar el cálculo. Por favor, verifique los datos introducidos.";
}


//FUNCIÓN con control de error

function calcularPagoPorPersona(float $total, int $personas): float
{
    if ($personas <= 0) {
        throw new Exception("El número de personas debe ser mayor a 0.");
    }

    return $total / $personas;
}
