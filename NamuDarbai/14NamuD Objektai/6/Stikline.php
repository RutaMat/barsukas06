<?php

// 6.	Sukurti klasę Stikline. Sukurti privačią savybę turis ir kiekis. Parašyti metodą ipilti($kiekis), kuris keistų savybę kiekis. Jeigu stiklinės tūris yra mažesnis nei pilamas kiekis- kiekis netelpa ir būna lygus tūriui. Parašyti metodą ispilti(), kuris grąžiną kiekį. Pilant išpilamas visas kiekis, tas kas netelpa, nuteka per stalo viršų. Sukurti tris stiklinės objektus su tūriais: 200, 150, 100. Didžiausią pripilti pilną ir tada ją ispilti į mažesnę stiklinę, o mažesnę į dar mažesnę.

class Stikline {
    private $turis;
    private $kiekis = 0;

    public function __construct($turis) {
        if(!is_integer($turis)) {
            echo 'Turis turi buti skaicius.';
            echo '<br>';
        } else {
            $this->turis = $turis;
        }
    }

    public function _get($prop) {
        return $this->$prop;
    }
    public function getKiekis(){
        return $this->kiekis;
    }

    public function ipilti($kiekis) {
        if(!is_integer($kiekis)) {
            echo 'Kiekis turi buti skaicius.';
        } else {
            $this->kiekis += $kiekis;
            if($this->kiekis > $this->turis) {
                echo 'Nuteka per stalo viršų';
                echo '<br>';
                $this->kiekis = $this->turis;
            } 
            echo "Stiklineje  $this->turis, skyscio yra $this->kiekis.";
            echo '<br>';
       }
    }
   public function ispilti($kiekis) {
     
        
        if($this->kiekis > $this->turis) {

            $this->kiekis = $this->turis;
        } 

   }  
   }
    
        
    

}