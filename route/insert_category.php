<?php
// Inclua os arquivos necessários
require_once 'AutoLoader.php';
require_once 'Model/Category.php';

// Verifique se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    // Crie uma nova instância da categoria
    $newCategory = new Category();
    $newCategory->setName($name);
    $newCategory->setDescription($description);
    $newCategory->setImage($image);

    // Crie uma instância do controlador de categorias
    $categoryController = new CategoryController();

    // Insira a nova categoria no banco de dados
    $categoryController->NewCategory($newCategory);
}
?>
