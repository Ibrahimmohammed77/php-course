<?php
spl_autoload_register(function ($className) {
    // Replace namespace separator with directory separator
    $className = str_replace("App\\", DIRECTORY_SEPARATOR, $className);
    $file = __DIR__ . "/src/$className.php";

    // Include file if it exists
    if (file_exists($file)) {
        require_once $file;
    } else {
        throw new Exception("File not found for class: $className");
    }
});
