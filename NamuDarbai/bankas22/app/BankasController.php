<?php
namespace Bank;
class BankasController {


    public function bankoTest($wahatToSay)
    {
        $labas = 'Hello, little One';
        return App::view('test', compact('wahatToSay', 'labas'));
    }

    public function index()
    {
        return App::view('home');
    }

    public function create() {
        return App::view('create_account');
    }
    // public function save() {
    //     return App::view('create_account');
    // }


}
