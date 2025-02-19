<?php

namespace App\Models;

use Config\Database;
use PDO;

class UserModel {
    private $conn;
    private $table = "users";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function getAllUsers() {
        $stmt = $this->conn->query("SELECT * FROM " . $this->table);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUser($id) {
        $stmt = $this->conn->prepare("SELECT * FROM " . $this->table . " WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createUser($name, $email) {
        $stmt = $this->conn->prepare("INSERT INTO " . $this->table . " (name, email) VALUES (?, ?)");
        return $stmt->execute([$name, $email]);
    }

    public function updateUser($id, $name, $email) {
        $stmt = $this->conn->prepare("UPDATE " . $this->table . " SET name = ?, email = ? WHERE id = ?");
        return $stmt->execute([$name, $email, $id]);
    }

    public function deleteUser($id) {
        $stmt = $this->conn->prepare("DELETE FROM " . $this->table . " WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
