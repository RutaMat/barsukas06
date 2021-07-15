<?php
namespace Bank;


class LoginController {


    // private static $dbType = 'json';
    private static $dbType = 'maria';
    
    public static function getData()
    {
        if (self::$dbType == 'json') {
            return Json::getJson();
        }
        if (self::$dbType == 'maria') {
            return Maria::getMaria();
        }
    }
    public function showLogin() {
        return App::view('login');
    }
    public function doLogin()
    { 
        $name = $_POST['name'];
        $pass = md5($_POST['pass']);
        $user = self::getData()->getUser($name, $pass);
        
        if (empty($user)) {
            App::redirect('login');
            }
        $_SESSION['logged'] = 1;
        $_SESSION['name'] = $name; 
        App::setMessage('Sėkmingas prisijungimas! ');
        App::redirect();

    }

}