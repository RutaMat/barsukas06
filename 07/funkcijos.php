<?php

$labas = 'Labas';
//jei kodas pries funkcija. Kodas nevykdo kas vyksta funkcijoje
//tol kol ta funkcija nebus iskviesta
//f-cija iskvieciama nusakant jos varda ir atitinkamai konkrecius argumentus
//pvz vardas(8, 25)(cia argumentai) nereik maisyti su funkcijos parametrais nes taimenama
//reiksme, kintamasis kuris neturi jokios konkrecios reiksmes
//funkcija visada turi grazinti kazka
function vardas($par1 = 10, $par2 = 10)
{    //galima grazinti tik viena reiksme tai gali buti ir masyvas
    // global $labas, $viso; // Nekoks budas
    // echo $GLOBALS['labas']; //jis egzistuoja.betnenaudojamas totalus oldskulas,, nenaudotina
    // echo $labas; negalima is isores viduje isspausdinti ir priesingai
   //is f-jos kintamojo isvesti negaliu, tik jo reiksme
    $viso = 'Viso gero';
    $sumav = $par1 + $par2;
    return $sumav;

}
//suma viduje bus ne tas pats f-joje.vien kitos nemato
//pazymejus kintama global tuomet matomi visame kode ir f-joje
//kitoje funkcijoje jis nesimatytu reiktu vel global irasyt
$suma = vardas(8, 25, 88);
echo $suma;
//argumentu gali buti daugiau nei parametr, bus defaultinis
//jeigu argumentu maziau nei parametru blogai
$suma = vardas();
echo $suma;

$suma = vardas(56, 25);
echo $suma;



function calc($action, ...$arg)
{// galima kviesti ir be parametru
// kai reiksmiu calc daugiau jis tampa masyvu
...arg paskutinis ir vienintelis
    _d($arg);
    $answ = 0;
    foreach ($arg as $val) {
        if ($action == '+') {
            $answ += $val;
        }
        elseif ($action == '-') {
            $answ -= $val;
        }
        
    }

    return $answ;
}

_d( 
    calc('-', 1, 5, 8)  // reiskia pliusuoja sekancias reiksmes
);

// echo $viso;


function stepper() 
{
    static $x = 0;// jis tik 1na kart nulis po to+1+2
    //iki tiek kart kiek iskviesta
    _d( __FUNCTION__ );//magic konstanta- rodo fun-jos varda kuriame ji iskviesta
    return ++$x;
}
//tikslas suskaiciuoti kiek padariau zingsniu, iskvieciau funkcija

_d( stepper() );//vienas zingsnis
_d( stepper() );//du z-niai
_d( stepper() );
_d( stepper() );