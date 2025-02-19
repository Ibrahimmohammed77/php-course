<?php

namespace App\Controllers\Api;

use App\Models\UserModel;

class UserController {
    private $model;

    public function __construct() {
        $this->model = new UserModel();
        header("Content-Type: application/json");
    }

    public function index() {
        $users = $this->model->getAllUsers();
        echo json_encode($users);
    }

    public function show($id) {
        $user = $this->model->getUser($id);
        echo json_encode($user ? $user : ["error" => "User not found"]);
    }

    public function store() {
        $data = json_decode(file_get_contents("php://input"), true);
        if (isset($data['name'], $data['email'])) {
            $this->model->createUser($data['name'], $data['email']);
            echo json_encode(["success" => true]);
        } else {
            echo json_encode(["error" => "Invalid input"]);
        }
    }

    public function update($id) {
        $data = json_decode(file_get_contents("php://input"), true);
        if (isset($data['name'], $data['email'])) {
            $this->model->updateUser($id, $data['name'], $data['email']);
            echo json_encode(["success" => true]);
        } else {
            echo json_encode(["error" => "Invalid input"]);
        }
    }

    public function delete($id) {
        $this->model->deleteUser($id);
        echo json_encode(["success" => true]);
    }
}
?>
