<?php
require '../../AutoLoader.php';

// Verificar se o email foi enviado via POST
if(isset($_POST['email'])){
    // Sanitizar o email
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Inicializar o objeto de conexão com o banco de dados
    $connect = new CRUD();

    // Parâmetros para a consulta SQL
    $parametro = array(1 => $email);

    // Consulta para verificar se o usuário existe
    $user_verificar = $connect->Read('SELECT name, email, password FROM users WHERE email = ?', $parametro);

    // Verificar se o usuário existe
    if(!$user_verificar){
        echo json_encode(array('error' => 'Usuário não encontrado. Entre em contato com o administrador!'));
    } else {
        // Obter a senha hashada armazenada no banco de dados
        $hashed_password = $user_verificar[0]['password'];

        // Verificar se a senha fornecida corresponde à senha armazenada
        $password_matched = password_verify($_POST['password'], $hashed_password);

        if($password_matched){
            // Senha correta, login bem-sucedido
            // Iniciar a sessão
            session_start();

            // Definir variáveis de sessão
            $_SESSION['name'] = $user_verificar[0]['name'];
            $_SESSION['email'] = $user_verificar[0]['email'];
            // Se você tiver uma coluna para a imagem no banco de dados, você pode definir a variável de sessão para a imagem aqui
            // $_SESSION['image'] = $user_verificar[0]['image'];

            // Redirecionar para a página principal
            header("Location: ../principal.php");
        } else {
            // Senha incorreta, login falhou
            echo json_encode(array('error' => 'Senha incorreta.'));
        }
        echo json_encode(array('success' => 'Usuário verificado.'));
    }
} else {
    echo json_encode(array('error' => 'Email ou Senha não fornecidos.'));
}
?>

