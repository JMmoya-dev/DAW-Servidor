<?php

/**
 * MODELO: Componente
 *
 * Objetivo: acceder a los datos (bd_tiendainfo).
 */
class Componente
{
    //Conexión a la base de datos 
    private PDO $bd;

    //Conexión recibida desde index.php

    public function __construct(PDO $bd)
    {
        $this->bd = $bd;
    }

    // Obtiene todos los componentes de la tabla "componentes".

    public function obtenerTodos(): array
    {
        $consulta = $this->bd->query("SELECT * FROM componentes");
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}
