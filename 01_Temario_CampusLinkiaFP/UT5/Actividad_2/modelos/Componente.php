<?php

/**
 * Modelo de la tabla componentes.
 * Aquí van todas las consultas SQL (siempre preparadas).
 */
class Componente
{
    private PDO $pdo;

    /**
     * Guarda la conexión PDO que recibe.
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Devuelve el total de componentes (para la paginación).
     */
    public function contarTodos(): int
    {
        $sql = 'SELECT COUNT(*) FROM componentes';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        // fetchColumn devuelve la primera columna; la paso a int
        return (int) $stmt->fetchColumn();
    }


    /**
     * Devuelve los componentes de una página.
     * @param int $limite Filas por página
     * @param int $desplazamiento Filas que se saltan
     */
    public function obtenerPagina(int $limite, int $desplazamiento): array
    {
        $sql = 'SELECT id, nombre, tipo, precio
                FROM componentes
                ORDER BY id
                LIMIT :limite OFFSET :desplazamiento';

        $stmt = $this->pdo->prepare($sql);

        // LIMIT y OFFSET tienen que ir como enteros
        $stmt->bindValue(':limite', $limite, PDO::PARAM_INT);
        $stmt->bindValue(':desplazamiento', $desplazamiento, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}
