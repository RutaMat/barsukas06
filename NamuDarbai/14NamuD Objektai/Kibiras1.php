<!-- 1.	Sukurti klasę Kibiras1. Sukurti protected savybę akmenuKiekis. Parašyti šiai savybei metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą. -->
<?php

class Kibiras1 {
    protected $akmenukuKiekis = 0;

    public function prideti1Akmeni()
    { // rasoma kintamasis arba savybe
       return $this->akmenukuKiekis++;
    }
    public function pridetiDaugAkmenu($kiekis)
    {
      if(!is_integer($kiekis)) {
         return;
      }
       //prie akmenu kiekio pridedama kiekis
       return $this->akmenukuKiekis += $kiekis;

    }

    public function getkiekPririnktaAkmenu()
    {
       //kadangi gauname naudojame get
       return $this->akmenukuKiekis;
    }
    

}

?>