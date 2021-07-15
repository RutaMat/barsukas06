<?php
namespace Bank;

class AgurkaiController {

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


    public function agurkuTest($wahatToSay)
    {
        $labas = 'Hello, little One';
        return App::view('test', compact('wahatToSay', 'labas'));
    }

    public function index()
    {
        $boxes = self::getData()->showAll();

        usort($boxes, fn ($a, $b) => $b['amount'] <=> $a['amount']);


        return App::view('index', ['boxes' => $boxes]);
    }

    public function add($id)
    {
        return App::view('add', ['id' => $id]);
    }

    public function doAdd($id)
    {
        $id = (int) $id;
        $kiek = (int) $_POST['amount'];
        if (self::getData()->getCount($kiek)) {
            $box = self::getData()->show($id);
            $box['amount'] += (int) $_POST['amount'];
            self::getData()->update($id, $box);
        }
        App::redirect();
    }

    public function remove($id)
    {
        return App::view('remove', ['id' => $id]);
    }

    public function doRemove($id)
    {
        $id = (int) $id;
        $box = self::getData()->show($id);
        $box['amount'] -= (int) $_POST['amount'];
        self::getData()->update($id, $box);
        App::redirect();
    }

    public function delete($id)
    {
        self::getData()->delete($id);
        App::redirect();
    }


    public function create()
    {
        return App::view('create_box');
    }

    public function save()
    {
        $box = ['id' => rand(10000000, 99999999), 'amount' => 0]; // be garantiju unikalumui
        self::getData()->create($box);
        App::redirect();
    }


}