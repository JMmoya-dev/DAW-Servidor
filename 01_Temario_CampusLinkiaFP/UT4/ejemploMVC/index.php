<?php
require 'config/database.php';
require 'models/Book.php';
require 'controllers/BookController.php';

$model = new Book($db);
$controller = new BookController($model);

$controller->listBooks();