<?php

namespace src\handlers;
use \src\models\User;

class LoginHandler {
    public static function checkLogin() {
        if(!empty($_SESSION['token'])){

            $token = $_SESSION['token'];
            $data = User::select()->where('token',$token)->one();
            if(count($data) > 0){
                $logged_user = new User();
                $logged_user->setId = $data['id'];
                $logged_user->setEmail = $data['email'];
                $logged_user->setName = $data['name'];
                return $logged_user;
            }
            
        }
        return false;
    }
}