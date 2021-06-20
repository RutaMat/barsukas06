<?php


foreach (range(1, 10) as $keyBig => $_) {
    foreach (range(1, 5) as $keySmall => $_) {
        $masyvas[$keyBig][$keySmall] = 1;
    }
}


$max = 0; 
foreach ($masyvas as $index1 => $val1) {
    foreach ($val1 as $index2 => $val2) {
        if ($val2 > $max) {
            $max = $val2;
            $big = $index1;
            $small = $index2;
        }
    }
}
_d($masyvas, 'masyvas');
_d($max, 'max');
_d("$big - $small", 'coord');

$sums = [];

foreach ($masyvas as $index1 => $val1) {
    foreach ($val1 as $index2 => $val2) {
        $sums[$index2] = ($sums[$index2] ?? 0) + $val2;
    }
}

_d($sums);
echo '<br>';
echo '-----------------3 (2masyvai)-----------';
echo '<br>';
// 3.	Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi 
// būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai
//  parinktos raidės iš intervalo A-Z. 
// Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
$abc = range('A', 'Z');
foreach (range(1, 10) as $keyBig => $_) {
    foreach (range(1, rand(2, 20)) as $keySmall => $_) {
        
        $masyvas2[$keyBig][$keySmall] = $abc[rand(0, 25)];
    }
}
//galima patikrinti kaip atrodo rang: _d(range('A', 'Z'));
_d($masyvas2);


usort($masyvas2, function($a, $b) {

$ak = (int) in_array('K', $a); //2.$a masyve iskome K raidziu, jei suras bus true(1), kitu false(0)
$bk = (int) in_array('K', $b);//irgi ieskome tik ilgame
//i int lengviau skaiciuoti
//vienam yra k raide kitam nera, ir kur yra eis i virsu
//tas vaziuos i virsu kas turi a raides(suvaziavima irgi parikrinti consolej kur k)
if ($ak + $bk == 1) {
    return $bk <=> $ak;  //1 arba -1 arba ok arba sukeiciam vietom
} //1.else reiskias jeigu nera K niekur masyve sudelioja pagal ilgi masyvo
return count($a) <=> count($b);//2.suranda kuris yra trumpesnis masyvas 1,0,-1
//po usort dedama return ir tikrina ar teisingai surasiau

});

_d($masyvas2);
echo '<br>';
echo '-----------------rusiavino pvz-----------';
echo '<br>';
//pvz. reikia isrusiuoti masyva kuris viduje turi:
$m = [
    ['A', 'B'],
    ['U', 'P'],
    ['T', 'H'],
    ['A', 'B']
];
_d($m);

usort($m, function($a, $b) {
 //isrusiuoti pagal 0el.jis bus $a
 return $a[0] <=> $b[0];  //jeigu nori 2 elementa $a[1] <=> $b[1]
//lygiu 1mo el si 2el tas pacias reiksmes A  su U , B su P
//jeigu norim gretint return $a[0].$a[1] <=> $b[0].$b[1]
//jeigu  return -($a[0] <=> $b[0]); padauginus is -1 gaunas is didejimo i mazejim 
}); 
_d($m);