<?php

/**
 * Clase Componente
 * 
 * Esta clase representa varios componentes de hardware y proporciona métodos para
 * obtener los tipos de componentes disponibles, los campos adicionales que
 * cada tipo requiere y para validar los datos recibidos del formulario.
 */
class Componente
{
    // Definimos los tipos de componentes y los campos adicionales que lleva cada tipo
    private $camposPorTipo = [
        'ratón'    => ['color', 'botones'],
        'teclado'  => ['idioma', 'teclas'],
        'pantalla' => ['pulgadas', 'formato']
    ];

    // Función para obtener los tipos de componentes disponibles
    public function obtenerTipos()
    {
        return array_keys($this->camposPorTipo);
    }

    // Función para obtener los campos adicionales de cada tipo
    public function obtenerCamposAdicionales()
    {
        return $this->camposPorTipo;
    }

    //Función para validar los datos recibidos del formulario
    public function validarDatos(array $datos)
    {
        $errores = [];

        // El tipo debe existir en la lista permitida
        $tipo = trim($datos['tipo'] ?? '');
        if (!array_key_exists($tipo, $this->camposPorTipo)) {
            $errores[] = 'El tipo de componente no es válido.';
            return $errores;
        }

        // Campos comunes a todos los tipos
        if (trim($datos['nombre'] ?? '') === '') {
            $errores[] = 'El nombre es obligatorio.';
        }

        $precio = trim($datos['precio'] ?? '');
        if (!is_numeric($precio) || $precio <= 0) {
            $errores[] = 'El precio debe ser un número superior a 0€.';
        }

        /*Campos adicionales: solo los del tipo elegido.
        Los numéricos deben ser un número mayor que 0; el resto, solo letras.*/
        $camposNumericos = ['botones', 'teclas', 'pulgadas'];

        foreach ($this->camposPorTipo[$tipo] as $campo) {
            $valor = trim($datos[$campo] ?? '');

            if ($valor === '') {
                $errores[] = 'El campo ' . $campo . ' es obligatorio.';
            } elseif (in_array($campo, $camposNumericos)) {
                if (!is_numeric($valor) || $valor <= 0) {
                    $errores[] = 'El campo ' . $campo . ' debe ser un número superior a 0 piezas.';
                } elseif ($campo === 'teclas' && $valor > 130) {
                    $errores[] = 'El campo teclas no puede ser mayor que 130.';
                }
            } elseif (!preg_match('/^[\p{L} ]+$/u', $valor)) {
                $errores[] = 'El campo ' . $campo . ' solo admite letras.';
            }
        }

        return $errores;
    }
}
