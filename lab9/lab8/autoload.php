<?php
spl_autoload_register(function ($className) {

    $className = str_replace("\\", "/", $className);
    $className= __DIR__ ."/src/".$className.".php";
    if (file_exists($className)) {
        require_once $className;
    } else {
        throw new Exception("This Files {$className} Not Found");
    }
});
