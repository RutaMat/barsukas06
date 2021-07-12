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
        return App::view('index', ['boxes' => Json::getJson()->showAll()]);
    }

    public function add($id)
    {
        return App::view('add', ['id' => $id]);
    }

    public function doAdd($id)
    {
        $id = (int) $id;
        $box = Json::getJson()->show($id);
        $box ['amount'] += (int)$_POST['amount'];
        Json::getJson()->update($id, $box);
        App::redirect();
    }

    public function remove($id)
    {
        return App::view('remove', ['id' => $id]);
    }

    public function doRemove($id)
    {
        $id = (int) $id;
        $box = Json::getJson()->show($id);
        $box ['amount'] -= (int)$_POST['amount'];
        Json::getJson()->update($id, $box);
        App::redirect();
    }

    public function delete($id)
    {
        Json::getJson()->delete($id);
        App::redirect();

    }


    public function create()
    {
        return App::view('create_box');
    }
    public function save()
    {
        $box = ['id' => rand(10000000, 99999999), 'amount' => 0];
        Json::getJson()->create($box);
        App::redirect();
    }
}