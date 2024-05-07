<?php

    ini_set('display_errors', 'On');

    ini_set('display_startup_errors', 1);

    error_reporting(E_ALL & ~E_NOTICE);

    require '../AutoLoader.php';

    $log = new UserController();

    $log->authenticate('admin@admin.com', 'Adriel.2016');

?>