<?php
// 4.	(EXTENDS) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras3. Sukurkite dar vieną klasę KibirasNePo1, kuri extendina klasę Kibiras3. KibirasNePo1 turi naudoti visus tėvinius metodus, bet metodas Prideti1Akmeni() turi pridėti ne vieną o atsitiktinį akmenų kiekį nuo 2 iki 5. Sukurkite KibirasNePo1 objektą ir pademonstruokite veikimą.

class Kibiras3 {
    protected $akmenuKiekis = 0;
protected static $visasAkmenuKiekis = 0;

public function prideti1Akmeni()
{
    $this->akmenuKiekis++;
    self::$visasAkmenuKiekis++;
}

public function pridetiDaugAkmenu($kiekis)
{
    if (!is_integer($kiekis)) {
        return;
    }
    $this->akmenuKiekis+= $kiekis;
    self::$visasAkmenuKiekis+= $kiekis;
}

public function kiekPririnktaAkmenu()
{
    return $this->akmenuKiekis;
}

public static function kiekVisoPririnktaAkmenu()
{
    return self::$visasAkmenuKiekis;
}
}