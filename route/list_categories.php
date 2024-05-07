<?php
// Inclua os arquivos necessários
require '../ClassesPhp/Controllers/CategoryController.php';

// Crie uma instância do controlador de categorias
$categoryController = new CategoryController();

// Obtenha a lista de categorias
$categories = $categoryController->List();

// Converta a lista de categorias em JSON e imprima-a
echo $categories;
?>