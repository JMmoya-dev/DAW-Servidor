<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modelo de la tabla componentes.
 * Hereda de Model (Eloquent), así ya tiene los métodos para
 * buscar, crear, editar y borrar sin escribir SQL.
 */
class Componente extends Model
{
    /**
     * Tabla de la base de datos.
     *
     * @var string
     */
    protected $table = 'componentes';

    /**
     * Mi tabla no tiene created_at ni updated_at.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Campos que se pueden guardar desde el formulario.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'tipo', 'precio'];
}
