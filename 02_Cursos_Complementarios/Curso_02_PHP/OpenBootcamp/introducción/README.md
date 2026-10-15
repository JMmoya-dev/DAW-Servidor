# 🚀 Entorno de Desarrollo con Docker (OpenBootcamp)

Este bloque contiene la infraestructura basada en contenedores Docker para ejecutar scripts de PHP, gestionar bases de datos relacionales con MySQL y administrar el entorno mediante una interfaz web.

---

## 🛠️ Servicios Incluidos

* **PHP 8 (FPM)** -> Ejecución del código de la aplicación.
* **Nginx** -> Servidor web local (accesible en el puerto `8000`).
* **MySQL 5.7** -> Motor de base de datos relacional (puerto `3306`).
* **PHPMyAdmin** -> Panel de gestión visual de la base de datos (puerto `8080`).

---

## 📋 Pasos para Levantar el Entorno

Sigue estos pasos en la terminal de VS Code para poner en marcha los contenedores tal y como se explica en el curso:

### 1. Situarse en la carpeta del proyecto
Asegúrate de que tu terminal está apuntando a la carpeta donde se encuentra el archivo `docker-compose.yaml`:
```bash
cd "Curso_02_PHP/OpenBootcamp/introduccion"
```

### 2. Crear el archivo de credenciales locales
Antes de arrancar por primera vez, necesitas el archivo `.env` para las contraseñas. Copia el archivo de ejemplo o créalo desde cero si no existe:
```bash
cp .env.example .env
```
*(Asegúrate de rellenar las variables `DB_DATABASE`, `DB_USERNAME` y `DB_PASSWORD` dentro del `.env` creado).*

### 3. Construir y levantar los contenedores
Ejecuta el siguiente comando para compilar las imágenes e iniciar todos los servicios en segundo plano (`-d` de *detached mode*):
```bash
docker compose up -d
```
*(Si usas una versión antigua de Docker, el comando puede requerir un guion medio: `docker-compose up -d`).*

### 4. Verificar el estado
Puedes comprobar que todos los servicios están corriendo correctamente con:
```bash
docker compose ps
```

---

## 🌐 Direcciones de Acceso Local

Una vez encendido el entorno, puedes abrir tu navegador e ingresar a las siguientes URLs:

* **Aplicación Web:** [http://localhost:8000](http://localhost:8000)
* **Gestor PHPMyAdmin:** [http://localhost:8080](http://localhost:8080)

---

## 🛑 Detener el Entorno
Cuando termines de trabajar y quieras liberar memoria ram en tu ordenador, apaga los contenedores ejecutando:
```bash
docker compose down
```
