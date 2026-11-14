<?php

/**
 * Conexión a la BD con PDO.
 * Las credenciales se leen del archivo .env
 */
class Conexion
{
    /**
     * Carga las variables del .env en el entorno.
     * @param string $ruta Ruta del archivo .env
     */
    private static function cargarEntorno(string $ruta): void
    {
        // si no existe el .env no se puede conectar
        if (!file_exists($ruta)) {
            throw new Exception("No se encuentra el archivo .env");
        }

        // leer el archivo en un array, una línea por posición
        $lineas = file($ruta, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lineas as $linea) {
            $linea = trim($linea);

            // saltar líneas vacías, comentarios y líneas sin "="
            if ($linea === '' || str_starts_with($linea, '#') || !str_contains($linea, '=')) {
                continue;
            }

            // separar clave y valor por el primer "="
            [$clave, $valor] = explode('=', $linea, 2);

            // guardar en el entorno para leerlo después con getenv()
            putenv(trim($clave) . '=' . trim($valor));
        }
    }
    /**
     * Crea y devuelve la conexión PDO.
     * @return PDO
     * @throws Exception si falla la conexión
     */
    public static function conectar(): PDO
    {
        // cargar el .env (está una carpeta por encima de /config)
        self::cargarEntorno(__DIR__ . '/../.env');

        // leer las credenciales del entorno
        $host    = getenv('DB_HOST');
        $puerto  = getenv('DB_PORT');
        $bd      = getenv('DB_NAME');
        $usuario = getenv('DB_USER');
        $clave   = getenv('DB_PASS');
        $charset = 'utf8mb4';

        // DSN: tipo de BD + datos de conexión (añadimos el puerto 3307)
        $dsn = "mysql:host=$host;port=$puerto;dbname=$bd;charset=$charset";

        $opciones = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // errores como excepciones
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // resultados como array asociativo
            PDO::ATTR_EMULATE_PREPARES   => false,                  // consultas preparadas nativas
        ];

        try {
            return new PDO($dsn, $usuario, $clave, $opciones);
        } catch (PDOException $e) {
            // el error real va al log, nunca a la pantalla
            error_log("Error PDO: " . $e->getMessage());
            throw new Exception("No se ha podido conectar con la base de datos.");
        }
    }
}
