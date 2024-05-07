<?php

ini_set('display_errors', 'On');

    ini_set('display_startup_errors', 1);

    error_reporting(E_ALL & ~E_NOTICE);

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../../vendor/autoload.php';

    class EmailController {

        private $email;

        public function __construct() {
            // Inicialize o objeto PHPMailer dentro do construtor
            $this->email = new PHPMailer(true);
        }

        private function ConfigureServer(){

            // Configurações do servidor SMTP
            $this->email->SMTPDebug = 2;
            $this->email->isSMTP(); // Define o uso do SMTP
            $this->email->Host = 'smtp.techmactrade.com'; // Endereço do servidor SMTP
            $this->email->SMTPAuth = true; // Habilita autenticação SMTP
            $this->email->Username = 'info@techmactrade.com'; // Seu email
            $this->email->Password = 'dzJeR3gNq6CMfxTwLc6Z'; // Sua senha de email
            $this->email->SMTPSecure = 'ssl'; // SSL Encryption
            $this->email->Port = 465; // Porta do servidor SMTP
        }

        public function sendEmail($to, $subject, $body) {
            try {
                // Configura o servidor SMTP
                $this->ConfigureServer();
    
                // Define o remetente e o destinatário do email
                $this->email->setFrom('info@techmactrade.com', 'Tech Mac Trade');
                $this->email->addAddress($to);
    
                // Define o assunto e o corpo do email
                $this->email->Subject = $subject;
                $this->email->Body = $body;
    
                // Envia o email
                $this->email->send();
                return true;
            } catch (Exception $e) {
                // Retorna false se houver algum erro ao enviar o email
                return false;
            }
        }

        public function getEmails($mailbox) {
            // Configurar as informações do servidor IMAP
            $imapPath = '{imap.techmactrade.com:993/imap/ssl}'; // Altere o servidor IMAP e a caixa de correio conforme necessário
            $username = 'info@techmactrade.com'; // Seu endereço de email
            $password = 'dzJeR3gNq6CMfxTwLc6Z'; // Sua senha de email
            // Conectar ao servidor IMAP
            $inbox = imap_open($imapPath, $username, $password) or die('Cannot connect to IMAP: ' . imap_last_error());
    
            // Verificar se houve algum erro ao abrir a caixa de entrada
            if (!$inbox) {
                return false;
            }
    
            // Obter os IDs dos emails na caixa de correio especificada
            $emails = imap_search($inbox, $mailbox);
    
            // Retornar os IDs dos emails
            return $emails;
        }

        // Outros Metodos

    }

    $m = new EmailController();

    echo $m->getEmails('INBOX');
?>