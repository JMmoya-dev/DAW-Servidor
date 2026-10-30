<?php
class Book {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function getAllBooks() {
        // Simulamos la respuesta de la base de datos
        return [
            ['title' => 'El Quijote', 'author' => 'Miguel de Cervantes'],
            ['title' => 'Cien años de soledad', 'author' => 'Gabriel García Márquez'],
            ['title' => 'El patrón MVC en PHP', 'author' => 'Luis Miguel Cabezas']
        ];
    }
}
