<?php

$books = []; // Inicializamos la variable $books para evitar errores si no se encuentra definida
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Lista de libros</title>
</head>

<body>
    <h1>Libros disponibles</h1>
    <ul>
        <?php foreach ($books as $book): ?>
            <li><?= htmlspecialchars($book['title']) ?> - <?= htmlspecialchars($book['author']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>