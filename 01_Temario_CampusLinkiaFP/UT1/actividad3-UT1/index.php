<?php
// "Base de datos" simulada en el servidor
$usuariosBD = [
    1 => [
        'nombre' => 'Jose Mª',
        'rol'    => 'Estudiante',
        'curso'  => 'DAW (Servidor)',
        'estado' => 'Activo'
    ],
    2 => [
        'nombre' => 'Profesor Tutor',
        'rol'    => 'Docente',
        'curso'  => 'DAW',
        'estado' => 'En línea'
    ]
];

// Capturar parámetro dinámico de la ruta (Ej: index.php?id=1)
$idUsuario = $_GET['id'] ?? 1;

// Verificar si existe el usuario o asignar un perfil por defecto
if (array_key_exists($idUsuario, $usuariosBD)) {
    $usuario = $usuariosBD[$idUsuario];
} else {
    $usuario = [
        'nombre' => 'Usuario No Encontrado',
        'rol'    => 'Desconocido',
        'curso'  => 'N/A',
        'estado' => 'Inactivo'
    ];
}

// Cargar/renderizar la plantilla inyectando la variable $usuario
require_once 'views/perfil.php';
