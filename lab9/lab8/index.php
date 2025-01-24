<?php
require "autoload.php";
use Controllers\UserController;


$user=new UserController();

$user->getUsers();