<?php
namespace Bank;

class App {

    public static function start()
    {
        ob_start();
        self::router();
        ob_end_flush();
    }

    public static function view($file, $data = [])
    {
        extract($data);
        require DIR.'views/'.$file.'.php';
    }

    public static function redirect($path = '') 
{
    header('Location:' . URL . $path);
    die;
}
//nedarys nieko jei prisijunge, jei neasam ismes i prisijungimo psl
public static function checkLogin() {
    if (!isset($_SESSION['logged'])) {
    self::redirect('login');
}

}
public static function getMessage()
{
    if (!isset($_SESSION['message'])) {
        return false;
    }
    $msg = $_SESSION['message'];
    unset($_SESSION['message']);
    return $msg;
}

public static function setMessage(string $msg)
{
    $_SESSION['message'] = $msg;
}

    private static function router()
    {  
       
        $uri = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);
        $uri = $_SERVER['REQUEST_URI'];
        $uri = explode('/', $uri);
        array_shift($uri);
        
        if ('login' == $uri[0]) {
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new LoginController)->showLogin();
            }
            else {
                return (new LoginController)->doLogin();
            }
        }
        if ('logout' == $uri[0]) {
            unset($_SESSION['logged'], $_SESSION['name']);
            self::redirect('login');
        }


        if ('create-account' == $uri[0]) {
            //apgina loginu linkus
            self::checkLogin();
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new BankasController)->create();
            }
            else {
                return (new BankasController)->save();
            }
        }

        if ('add' == $uri[0] && isset($uri[1])) {
            self::checkLogin();
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new BankasController)->add($uri[1]);
            }
            else {
                return (new BankasController)->doAdd($uri[1]);
            }
        }
        if ('rem' == $uri[0] && isset($uri[1])) {
            self::checkLogin();
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new BankasController)->remove($uri[1]);
            }
            else {
                return (new BankasController)->doRemove($uri[1]);
            }
        }
        if ('delete' == $uri[0] && isset($uri[1]) && 'POST' == $_SERVER['REQUEST_METHOD']) {
            self::checkLogin();   
            return (new BankasController)->delete($uri[1]);
        }

        if ($uri[0] == 'testas' && isset($uri[1])) {
            return (new BankasController)->bankoTest($uri[1]);
        }
        if ($uri[0] === '' && count($uri) === 1) {
            return (new BankasController)->index();
        }
       
        self::view('404');
        http_response_code(404);
        
    }
}