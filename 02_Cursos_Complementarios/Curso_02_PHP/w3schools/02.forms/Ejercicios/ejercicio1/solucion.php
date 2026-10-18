<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta ejer1</title>
</head>

<body>
    <h3>
        <?php

        $a = $_GET['numero1'];
        $b = $_GET['numero2'];

        echo "la multiplicación de $a por $b es: ", $a * $b;

        ?>
    </h3>

</body>

</html>