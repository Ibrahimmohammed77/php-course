<?php
namespace App\Controller;
use App\Models\User;
class UserControllrt{
    public function getUse(){
        $user =new User();
        $users=$user->index();
        if(!empty($users)){
            require_once __DIR__."/../View/user.php";
        }
    }
}
