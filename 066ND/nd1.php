<?php
echo '<br>';
echo '-----------------1-----------';
echo '<br>';
// 1.	Sugeneruokite masyvą iš 10 elementų,
//  kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.

foreach (range(1, 10) as $indexD => $valueD){
    foreach (range(1, 5) as $indexM => $valueM) {
$masyvasDidysis[$indexD][$indexM] = rand(5, 25);

    }
}
print_r($masyvasDidysis);
echo '<br>';
echo '-----------------2-----a-----';
echo '<br>';
//a)	Suskaičiuokite kiek masyve yra elementų didesnių už 10;


$under10 = 0;

foreach ($masyvasDidysis as $valueD){
    foreach ($valueD as $valueM) {
            
        if ($valueM > 10) {

            $valueM = $under10;
            
            ++$under10;
    
        } else $under10;
    }
}

echo "Reikšmių virš 10 yra $under10"; 
echo '<br>';
echo '-----------------2-----b-----';
echo '<br>';
//b)	Raskite didžiausio elemento reikšmę;

$max = 5;
$priskyrimas = [];
foreach ($masyvasDidysis as $indexD => $valueD){
    foreach ($valueD as $indexM => $valueM) {
        if($valueM > $max) {
            $max = $valueM;
            $priskyrimas = [];
        }
        if ($valueM == $max) {
           $priskyrimas[] = $indexM;
        }
    }
} 
echo "Max: $max => ";
echo "IndexM: $indexM ";
// nesigauna priskyrimo indexD
echo '<br>';
echo '-----------------2-----c-----';
echo '<br>';
// c)	Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas 
// (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
$vienodiKey = '';
foreach ($masyvasDidysis as $indexD => $valueD){
    foreach ($valueD as $indexM => $valueM) {
        $masyvasDidysis[$indexD][$indexM] = $vienodiKey;


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


