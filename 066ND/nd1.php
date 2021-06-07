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





