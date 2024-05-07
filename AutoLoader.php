<?php

/**
 * Model Class
 *
 * @package     ConfigSystem
 * @subpackage  classes
 * @category    AutoLoad
 * @author      Apolinário Ernesto
 * @date_create 21-02-2021      
 */

function recursiveAutoload($class_name) {
  $class_name = strtolower($class_name);
  $filename = $class_name . '.php';

  $root = dirname(__FILE__);
  $directories = array($root);

  while (!empty($directories)) {
    $directory = array_shift($directories);
    $scannedDirectory = scandir($directory);

    foreach ($scannedDirectory as $file) {
      if ($file === '.' || $file === '..') continue;

      $path = $directory . DIRECTORY_SEPARATOR . $file;

      if (is_dir($path)) {
        $directories[] = $path;
      } else if (strtolower($file) === $filename) {
        require_once $path;
        return;
      }
    }
  }

  // Handle class not found error (e.g., echo message, throw exception)
}

spl_autoload_register('recursiveAutoload');

