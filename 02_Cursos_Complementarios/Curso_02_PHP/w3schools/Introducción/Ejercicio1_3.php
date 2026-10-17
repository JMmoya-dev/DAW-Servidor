<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        table,
        td,
        th {
            border: 1px solid black;
            border-collapse: collapse;
            /* Para que no se vea doble borde feo */
            padding: 8px;
        }
    </style>
</head>

<body>


    <?php
    echo "Ejercicio 1 <br>";
    echo "Jose Mª <br><br>";

    echo "Ejercicio 2 <br>";
    $nombre = "Jose Mª";
    $direccion = "Atenas, 45";
    $telefono = 687441587;

    echo "<b><u>", $nombre, "</u><br>", $direccion, "<br><i>", $telefono, "</i></b><br><br>";

    echo "Ejercicio 3 <br>";
    $nom1_en = "house";
    $nom2_en = "car";
    $nom3_en = "book";
    $nom4_en = "water";

    $nom1_es = "casa";
    $nom2_es = "coche";
    $nom3_es = "libro";
    $nom4_es = "agua";

    ?>

    <table>
        <!--titulo-->
        <caption>TABLA 1</caption>

        <tr>
            <!--cabecera-->
            <th>INGLES</th>
            <th>ESPAÑOL</th>
        </tr>
        <tr>
            <td><?php echo $nom1_en; ?></td>
            <td><?php echo $nom1_es; ?></td>
        </tr>
        <tr>
            <td><?php echo $nom2_en; ?></td>
            <td><?php echo $nom2_es; ?></td>
        </tr>
        <tr>
            <!--las siguientes dos variables las abreviamos para un código más limpio-->
            <td><?= $nom3_en; ?></td>
            <td><?= $nom3_es; ?></td>
        </tr>
        <tr>
            <td><?= $nom4_en; ?></td>
            <td><?= $nom4_es; ?></td>
        </tr>
    </table>

</body>

</html>