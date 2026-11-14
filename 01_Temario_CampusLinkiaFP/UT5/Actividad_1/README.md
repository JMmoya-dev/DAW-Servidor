# UT5 - Actividad 1: Conexión segura a base de datos con PDO

Conexión segura y eficiente a MySQL con PDO en PHP, usando variables de entorno
para las credenciales, manejo de errores con excepciones y consultas preparadas.

## Estructura

    Actividad_1/
    ├── config/
    │   └── Conexion.php   # clase de conexión PDO
    ├── css/
    │   └── estilos.css    # estilos (separados de la lógica)
    ├── .env               # credenciales reales (NO se sube a GitHub)
    ├── .env.example       # plantilla de configuración
    ├── .gitignore         # excluye .env del repositorio
    ├── index.php          # prueba de conexión y consulta preparada
    └── README.md

## Instalación

1. Copiar `.env.example` como `.env`.
2. Rellenar en `.env` los datos reales de la base de datos.
3. Abrir `index.php` desde el servidor local (XAMPP).

## Buenas prácticas aplicadas

### Configuración y credenciales
- **Variables de entorno:** las credenciales están en `.env`, fuera del código, y se leen con `getenv()`.
- **`.env` no versionado:** está en `.gitignore`, así que la contraseña nunca llega al repositorio.
- **`.env.example`:** documenta qué variables necesita el proyecto, sin datos sensibles.
- **Usuario con permisos mínimos:** la aplicación no usa `root`, sino `app_user`, con solo
  `SELECT, INSERT, UPDATE` sobre `bd_tiendaInfo` (principio de menor privilegio).

### Configuración de PDO
- **`ERRMODE_EXCEPTION`:** los errores lanzan excepciones y se gestionan con `try/catch`.
- **`FETCH_ASSOC`:** los resultados llegan como array asociativo (acceso por nombre de columna).
- **`EMULATE_PREPARES => false`:** consultas preparadas nativas de MySQL, más seguras.
- **`charset=utf8mb4`:** soporte completo de Unicode (tildes, ñ, emojis).
- **Puerto en el DSN:** en este XAMPP MySQL usa el 3307.

### Seguridad
- **Consultas preparadas con marcadores con nombre** (`:precioMax`): el dato se envía separado
  del SQL y no puede alterar la consulta, lo que evita la inyección SQL.
- **Errores sin detalles en pantalla:** el error real se guarda con `error_log()` y al usuario
  solo se le muestra un mensaje genérico, sin usuario, host ni base de datos.
- **Salida escapada con `htmlspecialchars()`:** evita ataques XSS al mostrar los datos.
- **Columnas indicadas en el SELECT** en lugar de `SELECT *`: solo se traen los datos necesarios.

### Organización del código
- **Clase `Conexion`:** un único punto de conexión, reutilizable desde cualquier archivo.
- **Separación de responsabilidades:** lógica en PHP, estructura en HTML y presentación en CSS externo.

## Mejoras posibles en un entorno profesional
- Cargar el `.env` con la librería `vlucas/phpdotenv` (Composer) en lugar del lector propio.
- Usar conexiones cifradas SSL/TLS si la base de datos está en un servidor remoto.
- Guardar las credenciales en un gestor de secretos (HashiCorp Vault, AWS Secrets Manager...).