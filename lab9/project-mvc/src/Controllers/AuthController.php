<?php
namespace App\Controllers;

use App\Models\User;

class AuthController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userModel = new User();
            $user = $userModel->findByEmail($email);

            if ($user && password_verify($password, $user['password'])) {
                // Login successful
                session_start();
                $_SESSION['user'] = $user;
                header('Location: /dashboard');
                exit;
            } else {
                $error = "Invalid email or password.";
                require_once __DIR__ . '/../Views/login.php';
            }
        } else {
            require_once __DIR__ . '/../Views/login.php';
        }
    }

    public function dashboard() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /');
            exit;
        }

        $user = $_SESSION['user'];
        require_once __DIR__ . '/../Views/dashboard.php';
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: /');
        exit;
    }
}
