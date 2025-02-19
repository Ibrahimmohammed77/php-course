<?php

namespace Core;

use App\Controllers\UserController;
use App\Controllers\Api\UserController as ApiUserController;

class Router {
    public static function handleRequest() {
        $controller = new UserController();
        $method = $_SERVER['REQUEST_METHOD'];
        $url = $_GET['url'] ?? 'users';

        if (strpos($url, 'api/') === 0) {
            $apiController = new ApiUserController();
            $param = $_GET['id'] ?? null;

            switch ($method) {
                case 'GET':
                    $param ? $apiController->show($param) : $apiController->index();
                    break;
                case 'POST':
                    $apiController->store();
                    break;
                case 'PUT':
                    $apiController->update($param);
                    break;
                case 'DELETE':
                    $apiController->delete($param);
                    break;
                default:
                    echo json_encode(["error" => "Invalid API request"]);
                    break;
            }
        }
        switch ($method) {
            
            case 'GET':
                if ($url === 'users') {$controller->index();}
                elseif ($url === 'create') $controller->create();
                elseif ($url === 'edit' && isset($_GET['id'])) $controller->edit($_GET['id']);
                break;

            case 'POST':
                if ($url === 'store') $controller->store();
                if ($url === 'update' && isset($_POST['id'])) {
                    $controller->update($_POST['id']);
                }
                break;

            // case 'PUT':
            //   if ($url === 'update' && isset($_GET['id'])) {
            //         $controller->update($_GET['id']);
            //     }
            //     break;

            // case 'DELETE':
            //     parse_str(file_get_contents("php://input"), $_DELETE);
            //     if ($url === 'delete' && isset($_GET['id'])) {
            //         $controller->delete($_GET['id']);
            //     }
            //     break;

            default:
                echo "404 - Not Found";
                break;
        }
    }
}
?>
