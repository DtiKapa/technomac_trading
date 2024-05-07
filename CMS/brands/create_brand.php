<?php
ini_set('display_errors', 'On');

ini_set('display_startup_errors', 1);

error_reporting(E_ALL & ~E_NOTICE);

require('../../ClassesPhp/Controllers/BrandController.php');

$model = new Brand();
// Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Diretório onde as imagens serão armazenadas (certifique-se de que o diretório tem permissões de escrita)
        $targetDirectory = "../../assets/img/brands/";

        // Nome do arquivo enviado
        $fileName = basename($_FILES["image"]["name"]);

        // Caminho completo do arquivo no servidor
        $targetFilePath = $targetDirectory . $fileName;

        // Verifica a extensão do arquivo
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Permitir apenas certos tipos de arquivos
        $allowedTypes = array("jpg", "jpeg", "png", "gif");

        if (in_array($fileType, $allowedTypes)) {
            // Move o arquivo para o diretório de destino
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                
                // Agora você pode armazenar o caminho do arquivo no banco de dados
                // Por exemplo, você pode executar uma instrução SQL para inserir o caminho no banco de dados
                $model->setName($_POST['name']);
                $model->setImage($targetFilePath);
                $model->setLink($_POST['link']);
                
                // Execute a consulta SQL aqui
                $store = new BrandController();
                $store->createBrand($model);

                // O arquivo foi enviado com sucesso
                echo "O arquivo " . $fileName . " foi enviado com sucesso.";

            } else {
                // Se ocorrer um erro ao mover o arquivo, exibe uma mensagem de erro
                echo "Desculpe, ocorreu um erro ao enviar o arquivo.";
            }
        } else {
            // Se o tipo de arquivo não for permitido, exibe uma mensagem de erro
            echo "Somente arquivos JPG, JPEG, PNG e GIF são permitidos.";
        }
    } else {
        // Se o formulário não foi enviado corretamente, redireciona o usuário para a página do formulário
        //header("Location: form_upload_image.php");
        echo "Somente Erro.";
        
    }
?>
