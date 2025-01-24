<?php
spl_autoload_register(function ($className) {
    // Convert namespace to file path
    $className = str_replace('App\\', '', $className); // Remove the base namespace
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className); // Replace namespace separators with directory separators
    $file = __DIR__ . '/' . $className . '.php';

    // Include the file if it exists
    if (file_exists($file)) {
        include $file;
    } else {
        throw new Exception("File not found for class $className");
    }
});
