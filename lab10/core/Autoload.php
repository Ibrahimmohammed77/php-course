<?php

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class) . '.php';
    $file = __DIR__ . '/../' . $class;

    if (file_exists($file)) {
        require_once $file;
    }
});
?>
