<?php
// 3.	Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės
// A, B, C ir D, o ilgis 200.Suskaičiuokite kiek yra kiekvienos raidės.

echo '<br>';
echo '-----------------3-----------';
echo '<br>';

$raides = ['A', 'B', 'C', 'D'];
$n = 200;


for($i = 0; $i < $n; $i++) {
    $masyvasRaides[] = $raides[rand(0, 3)];
}
$countA = 0;
$countB = 0;
$countC = 0;
$countD = 0;

foreach ($masyvasRaides as  $value) {
    if ($value == 'A'){
        $countA++;
    } elseif ($value == 'B'){
            $countB++;
    } elseif ($value == 'C'){
        $countC++;
    } else  $countD++;
    
    
}

print_r($masyvasRaides);
echo "<br> A : $countA <br>";
echo "B : $countB <br>";
echo "C : $countC <br>";
echo "D : $countD <br>";


echo '<br>';
echo '-----------------4-----------';
echo '<br>';
//4.	Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
sort($masyvasRaides);
foreach ($masyvasRaides as $index => $value){
    echo "[" . $index . "] = " . $value . "\n";
}
echo '<br>';
echo '-----------------5-----------';
echo '<br>';
// 5.	Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus,
//  sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių 
//  (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.


foreach (range(1, 3) as $indexD => $_){
        foreach (range(1, 200) as $indexM => $valueM) {
$masyvasDidysis[$indexD][$indexM] = $raides[rand(0, 3)];

    }
}

$masyvasJungtinis = [];
 foreach ($masyvasDidysis as $valueJ) {
    mas
 }


print_r($masyvasDidysis);

