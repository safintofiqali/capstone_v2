<?php
// URL Creator 
function url_to($string=""){
    if($string[0] !== '/') {
        $string = '/' . $string;
    }
    return SITE_ROOT . $string;
}

// Class Auto Loader
function class_auto_loader($class) {
    $full_path = PRIVATE_PATH . '/classes' . '/' . strtolower($class) . ".class.php";
    if(file_exists($full_path)) {
        require_once($full_path);
    }
}