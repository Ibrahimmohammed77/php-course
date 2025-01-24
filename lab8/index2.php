<?php

require "autoload.php";

use App\User;
use App\Database;
use App\Controller\UserControllrt;

$app=new UserControllrt();
$app->getUse();
$user= new User();
$user->moha();

$db=new Database();
$db->conn();
