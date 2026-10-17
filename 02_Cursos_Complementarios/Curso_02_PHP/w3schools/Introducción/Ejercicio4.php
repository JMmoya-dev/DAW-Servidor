<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <style>
        table,
        th,
        td {
            border: solid black 2px;
            border-collapse: collapse;
            padding: 8px;

        }

        td {
            width: 90px;
        }

        caption {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <?php

    $asignatura1 = "0487 EDD";
    $asignatura2 = "0614 DAW";
    ?>


    <table>
        <caption>HORARIO ESCOLAR</caption>
        <tr>
            <th colspan="2">LUNES</th>
            <th colspan="2">MARTES</th>
            <th colspan="2">MIÉRCOLES</th>
        </tr>

        <tr>
            <th>hora</th>
            <th>asignatura </th>
            <th>hora</th>
            <th>asignatura </th>
            <th>hora</th>
            <th>asignatura </th>
        </tr>
        <tr>
            <td>11:00</td>
            <td><?= $asignatura1; ?></td>
            <td>12:00</td>
            <td><?= $asignatura2; ?></td>
            <td>13:00</td>
            <td><?= $asignatura1; ?></td>
        </tr>
        <tr>
            <td>16:00</td>
            <td><?= $asignatura2; ?></td>
            <td>17:00</td>
            <td><?= $asignatura2; ?></td>
            <td>18:00</td>
            <td><?= $asignatura1; ?></td>
        </tr>


    </table>


</body>

</html>