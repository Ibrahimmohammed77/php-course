<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController {
   protected $directory="Lessons/lab10/public/index.php";
    private $model;
    private static $path =__DIR__;

    public function __construct() {
        $this->model = new UserModel();
    }

    public function index() {
        $users = $this->model->getAllUsers();
        if($users!=null){

            include self::$path . '/../views/users/index.php';
        }
        else return "Empty";
    }

    public function create() {
        include __DIR__ . '/../views/users/create.php';
    }

    public function store() {

        if ($_POST) {
            $this->model->createUser($_POST['name'], $_POST['email']);
            // header(str_replace("?url=store","?url=users",$this->directory."?url=users"));
            header("Location:/".$this->directory);
            // echo "j";

        }
    }

    public function edit($id) {
        $user = $this->model->getUser($id);
        include __DIR__ . '/../views/users/edit.php';
    }

    public function update($id) {
        if ($_POST) {
            $this->model->updateUser($id, $_POST['name'], $_POST['email']);
            header("Location:/".$this->directory);
        }
    }

    public function delete($id) {
        $this->model->deleteUser($id);
        header("Location:/".$this->directory);
    }
}

