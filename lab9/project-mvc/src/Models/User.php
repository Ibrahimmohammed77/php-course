<?php
namespace App\Models;

use App\Database\Connection;
use PDO;

class User {
    public function findByEmail($email) {
        $db = Connection::getInstance();
        $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function register($name, $email, $password) {
        $db = Connection::getInstance();
        $stmt = $db->prepare("INSERT INTO users (name, email, password) 
        VALUES (:name, :email, :password)");
        return $stmt->execute([
            'name' => $name,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT), // Hash password for security
        ]);
    }
}
