<?php
spl_autoload_register(function ($class_name){
    $class_path = YT_BASE_PATH . "class/$class_name.php";
    if (is_readable($class_path) && file_exists($class_path)){
        include_once $class_path;
    }
});
