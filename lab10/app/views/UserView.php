<?php

namespace App\Views;

class UserView {
    public function renderJSON($data) {
        header("Content-Type: application/json");
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
}
?>
