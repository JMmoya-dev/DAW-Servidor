<!--UT3/index.php - Formulario principal de captura de datos-->


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/formulario.css">
    <title>UT3 - Registro de Usuario</title>
</head>

<body>

    <header>
        <h1>Gestión de Estado y Formularios - UT3</h1>
    </header>

    <main>
        <!-- Formulario enviado por método POST a procesar.php -->
        <form action="procesar.php" method="POST">

            <!-- Campo de Texto (Nombre) -->
            <p>
                <label for="nombre">Nombre completo:</label><br>
                <input type="text" id="nombre" name="nombre" placeholder="Ej. Jose Mª" required>
            </p>

            <!-- Selección Única con Radio Button (Estudios) -->
            <p>
                <label>Nivel de estudios:</label><br>
                <input type="radio" id="estudio_medio" name="estudios" value="medio" required>
                <label for="estudio_medio">Grado Medio</label><br>

                <input type="radio" id="estudio_superior" name="estudios" value="superior">
                <label for="estudio_superior">Grado Superior</label>
            </p>

            <!-- Menú Desplegable con Select (Turno) -->
            <p>
                <label for="turno">Turno preferido:</label><br>
                <select id="turno" name="turno" required>
                    <option value="" disabled selected>Selecciona un turno</option>
                    <option value="manana">Mañana</option>
                    <option value="tarde">Tarde</option>
                </select>
            </p>

            <!-- Casilla de Verificación Checkbox (Términos) -->
            <p>
                <input type="checkbox" id="acepto" name="acepto" value="si" required>
                <label for="acepto">Acepto los términos y condiciones</label>
            </p>

            <!-- Botón de Envío -->
            <button type="submit">Enviar datos</button>

        </form>
    </main>

</body>

</html>