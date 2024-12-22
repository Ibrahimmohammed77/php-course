<?php
$localhost = "localhost";
$dbname = "testdb";
$usernameDB = "root";
$passwordDB = "";
try {
    $dsn = "mysql:host=$localhost;dbname=$dbname;charset=utf8mb4";
    $conn = new PDO($dsn, $usernameDB, $passwordDB);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected SuccessFully";
} catch (Exception $e) {
    echo "connected Fails" . $e->getMessage();
}








// CREATE TABLE اسم_الجدول (  
//     id INT AUTO_INCREMENT PRIMARY KEY,  
//     column1 VARCHAR(255) CHARACTER SET utf8mb4,  
//     column2 TEXT CHARACTER SET utf8mb4  
// ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;