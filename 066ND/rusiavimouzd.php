<?php
echo '<br>';
echo '-----------------3 (2masyvai)-----------';
echo '<br>';
// 3.	Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi 
// būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai
//  parinktos raidės iš intervalo A-Z. 
// Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).

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

$abc = range('A', 'Z');
foreach (range(1, 10) as $keyBig => $_) {
    foreach (range(1, rand(2, 20)) as $keySmall => $_) {
        
        $masyvas2[$keyBig][$keySmall] = $abc[rand(0, 25)];
    }
}



usort($masyvas2, function($a, $b) {

$ak = (int) in_array('K', $a);
$bk = (int) in_array('K', $b);

if ($ak + $bk == 1) {
    return $bk <=> $ak;
}
return count($a) <=> count($b);

});

_d($masyvas2);