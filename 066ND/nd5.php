<?php

// 5.	Sukurkite masyvą iš 30 elementų.
//  Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id 
//  atsitiktinis unikalus skaičius nuo 1 iki 1000000,
//  place_in_row atsitiktinis skaičius nuo 0 iki 100. 
echo '<br>';
echo '-----------------5-------';
echo '<br>';
$masyvas = array_fill(0, 30, '');
foreach ($masyvas as $index => $value) {
   $masyvas[$index] = ['user_id' => rand(1, 1000000), 'place_in_row' => rand(0, 100)];
   
}
_d($masyvas);
// 6.	Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. 
// Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.
echo '<br>';
echo '-----------------6-------';
echo '<br>';

sort($masyvas);
_d('Rūšiavimas didėjančia tvarka: ');
_d($masyvas);

usort( $masyvas, function ($place_in_row, $user_id){
    return -($place_in_row() <=> $user_id()) ; 
});
_d('Rūšiavimas mažėjančia tvarka: ');
_d($masyvas);

// 7.	Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. 
// Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15
echo '<br>';
echo '-----------------7-------';
echo '<br>';
$masyvas = array_fill(0, 30, '');
foreach ($masyvas as $index => $value) {
   $masyvas[$index] = ['user_id' => rand(1, 1000000), 'place_in_row' => rand(0, 100)];
   
}
_d($masyvas);