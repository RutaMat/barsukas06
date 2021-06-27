  
<?php

class Pinigine {
    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;


    public function ideti(float $kiekis) 
    {
        if ($kiekis < 2 ) {
            $this->metaliniaiPinigai += $kiekis;
        }
        else {
            $this->popieriniaiPinigai += $kiekis;
        }
    }

    public function skaiciuoti()
    {
        echo $this->metaliniaiPinigai + $this->popieriniaiPinigai;
        echo '<br>';
    }
}