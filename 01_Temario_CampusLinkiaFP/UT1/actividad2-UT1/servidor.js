// PASO 1: Importar las librerías necesarias
const express = require('express'); // Cargamos la librería Express
const path = require('path');       // Librería nativa para gestionar rutas de archivos

// PASO 2: Inicializar la aplicación y definir el puerto
const app = express();              // Creamos la app web con Express
const PUERTO = 3000;                // Definimos el puerto donde escuchará el servidor

// PASO 3: Middleware de archivos estáticos (Buenas prácticas)
// Le decimos a Express que cualquier petición busque primero en la carpeta 'public' (HTML, CSS, imágenes)
app.use(express.static(path.join(__dirname, 'public')));

// PASO 4: Definir rutas de la API
// Cuando el navegador pida 'http://localhost:3000/api/usuario', ejecutamos esta función:
app.get('/api/usuario', (req, res) => {
    // res.json() convierte automáticamente el objeto JS a formato JSON
    res.json({
        id: 1,
        nombre: "Jose Mª",
        curso: "DAW",
        mensaje: "Respuesta en formato JSON desde Node.js"
    });
});

// PASO 5: Encender el servidor
// Inicia el servidor para que se quede en ejecución escuchando en el puerto 3000
app.listen(PUERTO, () => {
    console.log(`Servidor Node.js ejecutándose en http://localhost:${PUERTO}`);
});