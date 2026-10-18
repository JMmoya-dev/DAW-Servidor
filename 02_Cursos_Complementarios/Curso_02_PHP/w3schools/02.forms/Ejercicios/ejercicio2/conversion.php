<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>solución ej.2</title>
</head>

<body>
    <div class="contenedor">
        <?php
        $cantidadEuros = $_POST['numero1'];


        echo number_format($cantidadEuros * 166.386, 3, ',', '.') . " pesetas";


        ?>
    </div>

</body>
<footer>
    © José María
</footer>

</html>