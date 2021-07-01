<?php
// 5.	(EXTENDS) Sukurkite klasę Miskas. Klasė turi turėti protected savybę name ir protected metodą papasakok(), kuris atspausdintų stringą “Aš gyvenu miške pavadintame ${name}, o kur tu?” Kuriant objektą iš šitos klasės, jos konstruktoriuj turi būti perduotas miško vardas ir įrašytas į savybę name. Sukurkite klasę Zveris kuri extendina klasę Miskas. Klasė turi turėti protected savybę name ir protected metodą papasakok(), kuris atspausdintų stringą “Aš esu žvėris vardu ${name}” ir tada paleistų tėvinį metodą tuo pačiu vardu. Kuriant objektą iš šitos klasės, jos konstruktoriuj turi būti perduotas žvėries vardas ir įrašytas į savybę name. Sukurkite žvėries objektą ir paleiskite jame metodą papasakok(). 
class Miskas {
    protected  $name;
    

    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    protected function papasakok() {
        echo "<h2> Aš gyvenu miške pavadintame " .$this->name. " , o kur tu?</h2><br>";
        
    }
    
    



}