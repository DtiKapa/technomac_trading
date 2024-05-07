<?php
// Inicializa a sessão
session_start();

// Verifica se o usuário está autenticado, se não, redireciona para a página de login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Página protegida, você pode adicionar seu conteúdo aqui
$username = $_SESSION['username'];
echo "Bem-vindo, $username! Você está autenticado.";
?>
