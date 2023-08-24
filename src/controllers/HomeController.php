<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class HomeController extends Controller {
    
    private $logged_User;

    public function __construct() {

        $this->logged_User = LoginHandler::checkLogin() ;

        if($this->logged_User === false){
            $this->redirect('/login');
        }
    }

    public function index() {
        $this->render('home', ['nome' => 'Rodrigo']);
    }
}