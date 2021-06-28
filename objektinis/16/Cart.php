
<?php

class Cart {

    private static $obj;
    
    public static function getCart()
    {
        //jeigu klase tokia su objektu sukurta, ji grazinsiu. Jeigu ner sukurtsiu
        return self::$obj ?? self::$obj = new self;
    }
    

    private function __construct(){}

//f-jos isaiskinimas: pirma kart atejus self obj tuscias tada darome kas [o dvieju
    //skliausteliu o po 2ju skl naujo kepselio sukurimas ir užirasymas i self obj
    //2ra kart atejus jau yra idetas krepselis is naujo sukurimo ir idedamas i self

}