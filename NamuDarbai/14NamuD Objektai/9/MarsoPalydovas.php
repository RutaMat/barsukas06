<?php

//Deimas => Siaubas
//Fobas => Baimė

class MarsoPalydovas {

    private static $palydovai = [];
    private $title;

    private function __construct($name)
    {
        $this->title = $name;
    }

    public static function palydovas() 
    {
        if (!isset(self::$palydovai[0])) {
            return self::$palydovai[0] = new self('Deimas');
        }
        if (!isset(self::$palydovai[1])) {
            return self::$palydovai[1] = new self('Fobas');
        }
        return self::$palydovai[rand(0, 1)];
    }

}