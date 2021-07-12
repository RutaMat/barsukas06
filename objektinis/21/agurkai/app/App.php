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

    private static function router()
    {
        $uri = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);
        $uri = explode('/', $uri);

        if ('create-box' == $uri[0]) {
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new AgurkaiController)->create();
            }
            else {
                return (new AgurkaiController)->save();
            }
        }

        if ('add' == $uri[0] && isset($uri[1])) {
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new AgurkaiController)->add($uri[1]);
            }
            else {
                return (new AgurkaiController)->doAdd($uri[1]);
            }
        }
        if ('rem' == $uri[0] && isset($uri[1])) {
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new AgurkaiController)->remove($uri[1]);
            }
            else {
                return (new AgurkaiController)->doRemove($uri[1]);
            }
        }
        if ('delete' == $uri[0] && isset($uri[1]) && 'POST' == $_SERVER['REQUEST_METHOD']) {
                return (new AgurkaiController)->delete($uri[1]);
        }

        if ($uri[0] == 'testas' && isset($uri[1])) {
            return (new AgurkaiController)->agurkuTest($uri[1]);
        }
        if ($uri[0] === '' && count($uri) === 1) {
            return (new AgurkaiController)->index();
        }
       
        self::view('404');
        http_response_code(404);
        
    }
}