<?php
$masyvas['zurnalai'] = 'seni zurnalai';
echo '<pre>';
print_r($masyvas);
 
array_push($masyvas, 'knyga');
array_push($masyvas, 'albumas');
$masyvas[] = 'laikrasciai';     //naudojamas dazniau
$masyvas[1000000] = 'laikrasciai';
//$masyvas[1] = 'zodynas';
 
//print_r($masyvas);
//jeigu pirmam elementui irasom [1] tai masyvo pradzia bus nuo 1(pirmas elementas[1] 
 
$masyvas[] = 'lankstinukai';
$masyvas[''] = 'Nieko';
$masyvas[''] = 'Nieko2';
 
print_r($masyvas);
 
$masyvas2 = ['pele', 'kate' => 'tupi', 'suo'];
print_r($masyvas2);
 
$masyvas3 = ['pele', '9' => 'tupi', 'suo'];
print_r($masyvas3);
 
$masyvas4 = array('pele', 'tupi', 'suo');
print_r($masyvas4);
 
$masyvas5 = array('pele', 'tupi', 'suo')[rand(0, 2)];
print_r($masyvas5);
 
echo '<br>';
echo '----------------------------------<br>';
echo '-----CIKLAI-----------------------<br>';
// masyvams for ciklas netaikomas
 
asort($masyvas4);  //isrusiuoja abc-tvarka
print_r($masyvas4);
 
foreach ($masyvas as $val) {
    echo "$val" . '<br>';
}
echo '<br>';
 
foreach ($masyvas as $ind => $val) {
    echo "$ind => $val" . '<br>';
}
echo '<br>';
 
// 0 reiksmes priskirimas
foreach ($masyvas as $ind => &$val) {
    $val = 0;
}
print_r($masyvas);
 
echo '------<br>';
// kitas variantas
foreach ($masyvas as $ind => $val) {
    echo "$ind => $val" . '<br>';
    $masyvas[$ind] = 0;
}
 
echo '<br>';
echo '-------------<br>';
$A = 5;
$B = $A;
$C = 75;
$A = 6;
//echo $A;
echo '<br>';
//echo $B;
$A = 5;
$B = &$A;
$A = 6;
$B = 10;
echo $A;
echo '<br>';
echo $B;
echo '<br>';
echo '-------------<br>';
$colors = ['red', 'green', 'blue', 'yellow'];
print_r($colors);
 
foreach ($colors as &$value) {}
 
unset($value);
 
foreach ($colors as $index => $value) {
    echo 'Indeksas: ' . $index . ' Reiksme: ' . $value . '<br>';
}