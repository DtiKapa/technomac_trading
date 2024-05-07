<?php
require '../AutoLoader.php';

$conn = new CRUD();

// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecta ao banco de dados (substitua essas configurações com as suas)
    

    // Obtém os dados do formulário
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Valida os dados (adicionar mais validações conforme necessário)
    if (empty($name) || empty($username) || empty($password)) {
        echo "Todos os campos são obrigatórios.";
    } else {
        // Hash da senha
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insere o novo usuário no banco de dados
        $sql = "INSERT INTO users (name, username, password) VALUES (?,?,?)";

        $parametros = array(1=>$name, $username, $hashed_password);

        $conn->Create($sql, $parametro);

        if ($conn) {
            echo json_encode(array('success' => 'User inserted successfully'));
        } else {
            echo json_encode(array('error' => 'Failed to insert User'));
        }
    }
}
?>
