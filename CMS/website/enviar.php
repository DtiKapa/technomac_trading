<?php

ini_set('display_errors', 'On');

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

require('../../ClassesPhp/Controllers/WebsiteController.php');
//require('../../ClassesPhp/Model/Website.php');

$enviar = new WebsiteController();

$model = new Website();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos foram preenchidos e não estão vazios
    if (isset($_POST["address"]) && isset($_POST["contacts"])) {
        // Recupera os dados do formulário
        $model->setAddress($_POST["address"]);
        $model->setContact($_POST["contacts"]);
        $model->setLat($_POST["latitude"]);
        $model->setLong($_POST["longitude"]);
        $model->setFacebook($_POST["facebook"]);
        $model->setTwitter($_POST["twitter"]);
        $model->setLinkedin($_POST["linkedin"]);
        $model->setYoutube($_POST["youtube"]);
        
        $enviar->Insert_Update_datas($model);
        
        // Você pode adicionar mais processamento aqui, como redirecionar o usuário para uma página de sucesso
    } else {
        // Se algum campo estiver faltando, exiba uma mensagem de erro
        echo "Por favor, preencha todos os campos do formulário.";
    }
} else {
    // Se o formulário não foi enviado via método POST, exiba uma mensagem de erro
    echo "Ocorreu um erro ao processar o formulário.";
}
?>
