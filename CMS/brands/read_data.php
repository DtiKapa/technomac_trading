
<?php 

// equipment/read_data.php

ini_set('display_errors', 'On');

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

require('../../ClassesPhp/Controllers/BrandController.php');

$enviar = new BrandController();

echo $enviar->getListBrands();

?>