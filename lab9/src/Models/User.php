<?php
namespace App\Models;

class User {
    public function getAllUsers() {
        // Simulated database data
        return [
            ['id' => 1, 'name' => 'Ali', 'email' => 'ali@gmail.com'],
            ['id' => 2, 'name' => 'Ahmed', 'email' => 'ahmed@gmail.com'],
        ];
    }
}
