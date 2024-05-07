


<?php 

// website/receber.php

ini_set('display_errors', 'On');

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

require('../../ClassesPhp/Controllers/WebsiteController.php');

$enviar = new WebsiteController();

echo $enviar->List();

?>