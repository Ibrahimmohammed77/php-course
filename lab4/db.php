<?php
// Database credentials
$host = 'localhost';       // Database host
$dbName = 'test';          // Name of your database
$dbType = 'mysql';          // Name of your database
$userName = 'root';        // Database userName
$password = '';            // Database password
// PDO
try {
    // DSN  database connection details
    $dsn = "$dbType:host=$host;dbname=$dbName;charset=utf8mb4";

    // Create a PDO instance
    $pdo = new PDO($dsn, $userName, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected to the database successfully!";
} catch (PDOException $e) {
    // Handle connection errors
    echo "Database connection failed: " . $e->getMessage();
}



// CREATE TABLE اسم_الجدول (  
//     id INT AUTO_INCREMENT PRIMARY KEY,  
//     column1 VARCHAR(255) CHARACTER SET utf8mb4,  
//     column2 TEXT CHARACTER SET utf8mb4  
// ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;