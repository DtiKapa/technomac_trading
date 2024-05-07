<?php

    ini_set('display_errors', 'On');

    ini_set('display_startup_errors', 1);

    error_reporting(E_ALL & ~E_NOTICE);

    class UserController{

        Private $User;

        Private $crud;
    
        public function __construct()
        {
            require_once '/var/www/technomac_trading/AutoLoader.php';

            $this->User = new User();

            $this->crud = new CRUD();
        }

        public function createUser(User $usuario) {

            $procedure = 'Insert Into users (name, email, passoword) values(?,?,?)';

            $parametros = [
                $usuario->getName(),
                $usuario->getEmail(),
                $usuario->getPassword()
            ];

            $this->crud->Create($procedure, $parametros);
        }
    
        public function getUserByEmail($email) {

            $paramet = array(1=>$email);

            $procedure = "SELECT * FROM users WHERE email = ?";

            $resultset = $this->crud->Read($procedure, $paramet);

            if ($resultset) {
                // Initialize an empty array to hold category data
                $users = array();

                // Loop through each row in the result set
                foreach ($resultset as $row) {
                    // Append each category's data to the $categories array
                    $this->User->setEmail($row['email']);
                    
                    $users[] = array(
                        'id' => $row['id'],
                        'name' => $row['name'],
                        'email' => $row['email'],
                        'password' => $row['password']
                        // You can add more fields here if needed
                    );
                }

                // Encode the $categories array as JSON and echo the result
                return json_encode($users);
            } else {
                echo json_encode(array('error' => 'User Not Found.'));
            }
        }

        public function authenticate($email, $password) {

            // Verificar se o usuário existe
            $user = $this->getUserByEmail($email);
    
            if ($user) {
                // Verificar a senha
                if (password_verify($password, $user['password'])) {
                    // Autenticação bem-sucedida
                    session_start();
                    $_SESSION['user_id'] = [$user['id'], $user['email']];
                    header("Location: dashboard.php");
                }else {
                    echo json_encode(array('Error' => 'Credenciais inválidas, redireciona de volta para a página de login com mensagem de erro'));
                    // Credenciais inválidas, redireciona de volta para a página de login com mensagem de erro
                   
                }
            }
            // Autenticação falhou
            else {
                // Redireciona de volta para a página de login se os campos não foram enviados
                echo json_encode(array('Error' => 'User Not Found'));
            }
        }
    
        public function logout() {
            session_start();
            session_destroy();
        }
    
        public function isLoggedIn() {
            return isset($_SESSION['user_id']);
        }
    
        public function enforceLoggedIn() {
            if (!$this->isLoggedIn()) {
                // Redirecionar ou mostrar uma mensagem de erro
                header('Location: login.php');
                exit();
            }
        }
    }
    
?>