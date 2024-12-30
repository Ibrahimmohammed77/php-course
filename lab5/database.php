<?php
$server = "localhost";
$username = "root";
$password = "";
$databaseName = 'testdb';
try {
    $dsn = "mysql:host=$server;dbname=$databaseName;charset=utf8mb4";

    // Create a PDO instance (connect to the database)
    $pdo = new PDO($dsn, $username, $password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create the table
    $sql = "
    CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    ";

    $pdo->exec($sql);
    echo "Table created successfully.";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
