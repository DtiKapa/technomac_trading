<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Categoria</title>
</head>
<body>
    <h1>Inserir Nova Categoria</h1>
    <form action="insert-category" method="POST">
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="description">Descrição:</label><br>
        <textarea id="description" name="description" required></textarea><br>
        <label for="image">Imagem:</label><br>
        <input type="text" id="image" name="image"><br>
        <input type="submit" value="Inserir Categoria">
    </form>
</body>
</html>
