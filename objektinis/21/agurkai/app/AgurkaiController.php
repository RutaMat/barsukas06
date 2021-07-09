<?php
namespace Bank;
class AgurkaiController {


    public function agurkuTest($wahatToSay)
    {
        $labas = 'Hello, little One';
        return App::view('test', compact('wahatToSay', 'labas'));
    }

    public function index()
    {
        return App::view('home');
    }


}
