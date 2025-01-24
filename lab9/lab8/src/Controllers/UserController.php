<?php

namespace Controllers;

use Models\User;

class UserController
{
    public function getUsers()
    {
        $users = User::all();
        require_once __DIR__."/../Views/user.php";
    }
}
