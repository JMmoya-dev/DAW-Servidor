<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>

    <?php

    $valorEuro = 150;
    $tasaCambio = 166.386;

    echo "Ejercicio 8 conversor euro a pesetas <br><br>";

    $resultPesatas = $valorEuro * $tasaCambio;

    echo number_format($resultPesatas, 2, ',', '.'), " PTAS <br><br>";


    echo "Ejercicio 10 pirámide de asteristos (*) <br>";

    ?>

    <pre>

         *
        ***
       *****
      *******
     *********
    </pre>
    <!--&nbsp; significa Non-Breaking Space (espacio en blanco que no se rompe).-->

    <p style="font-family: courier">
        <?php
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;***<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*****<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;*******<br>";
        echo "&nbsp;&nbsp;&nbsp;*********<br>";
        ?>
    </p>

    <?php
    echo "Ejercicio 10 pirámide de asteristos (*) <br><br>";

    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;*<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;*<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>";
    ?>


</body>

</html>