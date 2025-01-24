<?php
require 'autoload.php';

use App\Controllers\AuthController;
use App\Controllers\RegisterController;

$authController = new AuthController();
$registerController = new RegisterController();

if ($_SERVER['REQUEST_URI'] === '/') {
    $authController->login();
} elseif ($_SERVER['REQUEST_URI'] === '/register') {
    $registerController->register();
} elseif ($_SERVER['REQUEST_URI'] === '/dashboard') {
    $authController->dashboard();
} elseif ($_SERVER['REQUEST_URI'] === '/logout') {
    $authController->logout();
} else {
    http_response_code(404);
    echo "Page not found";
}
