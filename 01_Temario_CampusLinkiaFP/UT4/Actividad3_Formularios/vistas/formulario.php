<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Añadir componente</title>
</head>

<body>
    <h1>Añadir componente</h1>
    <?php
    /**
     * Vista del formulario de componentes.
     *
     * Variables que le pasa el controlador:
     * @var array $tipos             Lista de tipos de componente.
     * @var array $camposAdicionales Campos extra de cada tipo.
     */
    ?>

    <form id="formulario" method="POST" action="procesar.php">
        <label for="tipo">Tipo de componente:</label>
        <select id="tipo" name="tipo" required>
            <option value="">Selecciona un tipo</option>
            <?php foreach ($tipos as $tipo): ?>
                <option value="<?= htmlspecialchars($tipo) ?>"><?= htmlspecialchars(ucfirst($tipo)) ?></option>
            <?php endforeach; ?>
        </select>
        <br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>

        <label for="precio">Precio (€):</label>
        <input type="number" id="precio" name="precio" min="0" step="0.01" required>
        <br>

        <!-- Aquí aparecerán los campos dinámicos según el tipo -->
        <div id="campos-dinamicos"></div>

        <button type="submit">Enviar</button>
    </form>

    <!-- Aquí aparecerá la respuesta del servidor -->
    <div id="respuesta"></div>
    <script>
        // Campos adicionales de cada tipo, enviados desde el modelo
        const camposAdicionales = <?= json_encode($camposAdicionales) ?>;
        const selectorTipo = document.getElementById('tipo');
        const contenedorCampos = document.getElementById('campos-dinamicos');

        /**
         * Genera los inputs adicionales según el tipo elegido.
         * Si no hay tipo elegido, no muestra ningún campo extra.
         */
        function generarCampos(tipo) {
            contenedorCampos.innerHTML = '';
            if (camposAdicionales[tipo]) {
                camposAdicionales[tipo].forEach(campo => {
                    const etiqueta = document.createElement('label');
                    etiqueta.textContent = campo.charAt(0).toUpperCase() + campo.slice(1) + ':';
                    const entrada = document.createElement('input');
                    entrada.name = campo;
                    entrada.type = 'text';
                    entrada.required = true;
                    contenedorCampos.appendChild(etiqueta);
                    contenedorCampos.appendChild(entrada);
                    contenedorCampos.appendChild(document.createElement('br'));
                });
            }
        }

        // Cada vez que el usuario cambia el tipo, se regeneran los campos
        selectorTipo.addEventListener('change', e => {
            generarCampos(e.target.value);
        });

        // Al cargar la página no hay tipo elegido, así que no aparece nada
        generarCampos(selectorTipo.value);

        const formulario = document.getElementById('formulario');
        const contenedorRespuesta = document.getElementById('respuesta');

        // Al enviar el formulario, se manda al servidor sin recargar la página
        formulario.addEventListener('submit', function(e) {
            e.preventDefault();
            const datos = new FormData(this);

            fetch('procesar.php', {
                    method: 'POST',
                    body: datos
                })
                .then(respuesta => respuesta.text())
                .then(html => {
                    contenedorRespuesta.innerHTML = html;
                })
                .catch(error => {
                    contenedorRespuesta.innerHTML = 'Error en la comunicación.';
                });
        });
    </script>
</body>

</html>


