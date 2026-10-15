<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario - UT1</title>
    <link rel="stylesheet" href="public/css/estilos.css">
</head>

<body>

    <header>
        <h1>Plataforma DAW - UT1</h1>
    </header>

    <main>
        <article class="card">
            <!-- Impresión de variables dinámicas pasadas desde el servidor -->
            <h2>Perfil de: <?= htmlspecialchars($usuario['nombre']) ?></h2>
            <p><strong>Rol:</strong> <span class="badge"><?= htmlspecialchars($usuario['rol']) ?></span></p>
            <p><strong>Curso:</strong> <?= htmlspecialchars($usuario['curso']) ?></p>
            <p><strong>Estado de matrícula:</strong> <?= htmlspecialchars($usuario['estado']) ?></p>

            <button id="btn-interactivo">Probar Interactividad JS</button>
            <p id="mensaje-js" style="margin-top: 1rem; text-align: center;"></p>
        </article>
    </main>

    <footer>
        <p>&copy; 2026 - Desarrollo Web en Entorno Servidor</p>
    </footer>

    <script src="public/js/app.js"></script>
</body>

</html>