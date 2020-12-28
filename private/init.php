<?php

define("PRIVATE_PATH",dirname(__FILE__));
define("PROJECT_PATH",dirname(PRIVATE_PATH));
define("SHARED_PATH",PRIVATE_PATH . '/shared');
define("CLASSES_PATH",PRIVATE_PATH . '/classes');
define("PUBLIC_PATH",PROJECT_PATH . '/public');

$index = strpos($_SERVER['SCRIPT_NAME'],'/public') + 7;
$url = substr($_SERVER['SCRIPT_NAME'],0,$index);
define("SITE_ROOT",$url);

    // Functions
    require_once("functions/functions.php");

    // Classes
    spl_autoload_register('class_auto_loader');

