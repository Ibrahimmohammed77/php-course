<?php
namespace App\Controllers;

use App\Models\User;

class RegisterController {
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirm_password'];

            if ($password !== $confirmPassword) {
                $error = "Passwords do not match.";
                require_once __DIR__ . '/../Views/register.php';
                return;
            }

            $userModel = new User();

            if ($userModel->findByEmail($email)) {
                $error = "Email already exists.";
                require_once __DIR__ . '/../Views/register.php';
                return;
            }

            if ($userModel->register($name, $email, $password)) {
                header('Location: /');
                exit;
            } else {
                $error = "Registration failed. Please try again.";
                require_once __DIR__ . '/../Views/register.php';
            }
        } else {
            require_once __DIR__ . '/../Views/register.php';
        }
    }
}
