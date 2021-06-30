
<?php 
require __DIR__. '/Grybas.php';
require __DIR__. '/Krepsys.php';
$krepsys = new Krepsys();
do { 
    $grybas = new Grybas();
    if($grybas->valgomas == true && $grybas->sukirmijes == false){
        $krepsys->kiekis+=$grybas->svoris;
    }
} while ($krepsys->kiekis < Krepsys::DYDIS);
_d($krepsys->kiekis);

