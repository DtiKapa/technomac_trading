
<?php 

// equipment/read_data.php

ini_set('display_errors', 'On');

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

require('../../ClassesPhp/Controllers/EquipmentController.php');

$enviar = new EquipmentController();

echo $enviar->getListEquipment();

?>