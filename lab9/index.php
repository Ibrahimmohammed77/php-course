<?php
require 'autoload.php';

use App\Controllers\UserController;

$controller = new UserController();
$controller->index();
