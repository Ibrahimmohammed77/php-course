<?php
spl_autoload_register(function ($className) {
    $className = str_replace('App\\', DIRECTORY_SEPARATOR, $className);
    $file = __DIR__ . '/src/' . $className . '.php';

    if (file_exists($file)) {
        require_once $file;
    } else {
        throw new Exception("Class not found: $className");
    }
});
