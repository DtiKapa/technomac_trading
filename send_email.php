
<?php
// Inclua a classe do PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Carregue o autoloader do PHPMailer (se estiver usando o Composer)
require 'vendor/autoload.php';

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Crie uma nova instância do PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor SMTP
        $mail->SMTPDebug = 2;
        $mail->isSMTP(); // Define o uso do SMTP
        $mail->Host = 'smtp.techmactrade.com'; // Endereço do servidor SMTP
        $mail->SMTPAuth = true; // Habilita autenticação SMTP
        $mail->Username = 'info@techmactrade.com'; // Seu email
        $mail->Password = 'dzJeR3gNq6CMfxTwLc6Z'; // Sua senha de email
        $mail->SMTPSecure = 'ssl'; // SSL Encryption
        $mail->Port = 465; // Porta do servidor SMTP

        // Remetente e destinatário
        $mail->setFrom($_POST['email'], $_POST['name']); // Seu endereço de email e seu nome
        $mail->addAddress('info@techmactrade.com', 'Negócios'); // Endereço de email do destinatário e nome

        // Conteúdo do email
        $mail->isHTML(true); // Define o formato do email como HTML
        $mail->Subject = $_POST['subject'];
        $mail->Body = $_POST['message'];

        // Envia o email
        $mail->send();
        echo " 
            <script> 
                alert('Sent Message Successfully'); 
                document.location.href = 'index.php';
            </script>
        ";

    } catch (Exception $e) {
        echo 'O email não pôde ser enviado. Erro: ', $mail->ErrorInfo;
    }
}
?>

