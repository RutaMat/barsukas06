<!-- 7.	Sukurti klasę Grybas. Sukurti klasę Krepsys. Krepsys turi konstantą dydis lygią 500. Grybas turi tris privačias savybes: valgomas, sukirmijes, svoris. Kuriant Grybo objektą jo savybės turi būti atsitiktinai priskiriamos taip: valgomas- true arba false, sukirmijes- true arba false ir svoris- nuo 5 iki 45. Eiti grybauti, t.y. Kurti naujus Grybas objektus, jeigu nesukirmijęs ir valgomas dėti į Krepsi objektą, kol bus pririnktas pilnas krepšys nesukirmijusių ir valgomų grybų (gali būti biški daugiau nei dydis). -->

<?php

class Grybas {

    private $valgomas, $sukirmijes, $svoris;

    public function __construct()
    {
        $this->valgomas = rand(0, 1) ? true : false;
        $this->sukirmijes = rand(0, 1) ? true : false;
        $this->svoris = rand(5, 45);
        // echo '<h6>Grybas</h6>';
    }

    public function __get($prop)
    {
        return $this->$prop;
    }
}