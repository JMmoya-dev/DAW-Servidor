<?php
class BookController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function listBooks() {
        $books = $this->model->getAllBooks();
        include 'views/book_list.php';
    }
}