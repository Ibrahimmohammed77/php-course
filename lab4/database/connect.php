<?php
// Database credentials
$host = 'localhost';       // Database host
$dbname = 'test';        // Name of your database
$username = 'root';        // Database username
$password = '';            // Database password
// PDO

//  

try {
    // DSN (No need to specify the web server's port here, only the database connection details)
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

    // Create a PDO instance
    $pdo = new PDO($dsn, $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected to the database successfully!";
} catch (PDOException $e) {
    // Handle connection errors
    echo "Database connection failed: " . $e->getMessage();
}
