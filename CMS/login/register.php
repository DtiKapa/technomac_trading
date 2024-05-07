<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TECHNOMAC - CMS - Register</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f2f2f2;
            }

            header {
                background-color: #ec7a37;
                color: #fff;
                padding: 10px 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .logo img {
                max-width: 100px; /* Ajuste o tamanho da logo conforme necessário */
            }

            nav ul {
                list-style-type: none;
                padding: 0;
                margin: 0;
            }

            nav ul li {
                display: inline;
            }

            nav ul li a {
                color: #fff;
                text-decoration: none;
                padding: 10px;
            }

            nav ul li a:hover {
                background-color: #0056b3;
            }


            form {
                width: 300px;
                margin: 100px auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            label {
                font-weight: bold;
            }

            input[type="text"],
            input[type="password"] {
                width: calc(100% - 20px);
                margin-bottom: 10px;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 3px;
            }

            input[type="submit"] {
                width: 100%;
                background-color: #007bff;
                color: #fff;
                padding: 10px;
                border: none;
                border-radius: 3px;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: #0056b3;
            }

            #error-message {
                color: red;
                margin-top: 10px;
            }

            .hidden {
                display: none;
            }
        </style>
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="../../assets/img/logo-white.png" alt="Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="../../index.php">Home</a></li>
                    <!-- Adicione mais itens de navegação conforme necessário -->
                </ul>
            </nav>
        </header>

        <form id="RegisterForm" action="../../ClassesPhp/User/CreateUser.php" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" placeholder="Insert your Name" name="name"> <br>
            
            <label for="username">User:</label>
            <input type="text" id="username" placeholder="user@exemplo.com" name="username"> <br>
            
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" placeholder="**********"> <br>
            
            <input type="submit" value="Register" id="btt_register">
        </form>

        <div id="error-message" class="hidden">Please enter both username and password.</div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#RegisterForm').submit(function(event) {
                    var name = $('#name').val();
                    var username = $('#username').val();
                    var password = $('#password').val();

                    if (username === '' || password === '') {
                        $('#error-message').removeClass('hidden');
                        event.preventDefault(); // Prevent form submission
                    } else {
                        $('#error-message').addClass('hidden');
                        // Perform form submission
                    }
                });
            });

        </script>
    </body>
</html>
