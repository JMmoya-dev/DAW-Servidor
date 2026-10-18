# UT3: Funcionalidades Dinámicas y Mantenimiento de Estado

Aplicación web modular en PHP para la gestión de formularios dinámicos, persistencia de sesiones y protección avanzada de seguridad en servidor.

---

## Tabla de contenidos

- [Características](#características)
- [Estructura del Proyecto](#estructura-del-proyecto)
- [Requisitos previos](#requisitos-previos)
- [Instalación](#instalación)
- [Uso](#uso)
- [Medidas de Seguridad](#medidas-de-seguridad)
- [Tecnologías utilizadas](#tecnologías-utilizadas)
- [Licencia](#licencia)

---

## Características

- Mantenimiento de estado persistente entre páginas usando sesiones en PHP.
- Interfaz dinámica con saludo personalizado y preselección de campos de formulario.
- Destrucción segura del estado de sesión mediante un endpoint dedicado (`logout.php`).
- Maquetación limpia mediante la separación estricta de estilos en archivos CSS externos.
- Protección robusta contra vulnerabilidades XSS, fijación de sesión y ataques CSRF.

---

## Estructura del Proyecto

```text
UT3/
├── css/
│   ├── base.css          # Estilos generales de la aplicación
│   └── formulario.css    # Estilos específicos para la interfaz del formulario
├── includes/
│   └── sesion.php        # Configuración centralizada de cookies y tokens de sesión
├── index.php             # Formulario principal con detección de estado
├── procesar.php          # Validación, saneamiento y persistencia de datos
├── logout.php            # Cierre y limpieza completa de la sesión
└── README.md             # Documentación general del proyecto
```

---

## Tecnologías utilizadas

- **Lenguaje Servidor:** PHP 8.x
- **Estilos:** CSS3 (modularizado sin estilos en línea)
- **Servidor Web:** Apache (XAMPP local)

---

## Licencia

Proyecto desarrollado con fines educativos para el módulo de **Desarrollo Web en Entorno Servidor (DAW)**.