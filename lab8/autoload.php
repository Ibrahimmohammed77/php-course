<?php

spl_autoload_register(function ($classname) {

    // var_dump($classname);
    // echo "<br>";
    $classname = str_replace("App\\", "/", $classname);

    $classname = __DIR__ . $classname . ".php";
    // echo "<br>";
    // var_dump($classname);

    if(file_exists($classname)){
        require_once $classname;
    }
    else{
        throw new Exception("This file does {$classname} not Exsits");
    }
});
