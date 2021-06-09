<?php

// 5.	Sukurkite masyvą iš 30 elementų.
//  Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id 
//  atsitiktinis unikalus skaičius nuo 1 iki 1000000,
//  place_in_row atsitiktinis skaičius nuo 0 iki 100. 
echo '<br>';
echo '-----------------5-------';
echo '<br>';

//$count = 0;
$masyvas = [];
do {
   // $count++; //nebutinas tik del idomumo suzinoti apsisukimus
    $uid = rand(1, 50);
    //su foreacu ieskome unikalaus userio id
    foreach ($masyvas as $user) {
        if ($user['user_id'] == $uid) {
            continue 2;//tesiu tevini cikla do
        }
    } 
     //naujam masyvui priskiriam masyva
    $masyvas[] = [
        'user_id' => $uid,
        'place_in_row' => rand(0, 100)
    ];
       //tikrinu masyvo dydi
} while(count($masyvas) < 30);

// ----------cia be unikaliu------------
// $masyvas = array_fill(0, 30, '');
// foreach ($masyvas as $index => $value) {
//    $masyvas[$index] = ['user_id' => rand(1, 1000000), 'place_in_row' => rand(0, 100)];
   
// }
// _d($masyvas);

// 6.	Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. 
// Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.
echo '<br>';
echo '-----------------6-------';
echo '<br>';

sort($masyvas);
_d('Rūšiavimas didėjančia tvarka: ');
_d($masyvas);

usort( $masyvas, function ($place_in_row, $user_id){
    return $user_id['place_in_row'] <=> $place_in_row['place_in_row']  ; 
});

_d('Rūšiavimas mažėjančia tvarka: ');
_d($masyvas);

// 7.	Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. 
// Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15
echo '<br>';
echo '-----------------7-------';
echo '<br>';
foreach ($masyvas as &$user) {
  //pridejimo f-jos
   $user['name'] = '';
   $user['surname'] = '';
   foreach(range(1, rand(5, 15)) as $_) {
       $user['name'] .= range('a', 'z')[rand(0, 25)];
   }
   foreach(range(1, rand(5, 15)) as $_) {
       $user['surname'] .= range('a', 'z')[rand(0, 25)];
   }
}


_d($masyvas);
// 8.	Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: 
// generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. 
// Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite
//  atsitiktiniais skaičiais nuo 0 iki 10.
//  Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.
echo '<br>';
echo '-----------------8-------';
echo '<br>';

$masyvasSk = [];

foreach (range(1, 10) as $key1 => $_) {
    $sk = rand(0, 5);
    if ($sk == 0) {
        $masyvasSk[$key1] = rand(0, 10);
    } else {
        foreach (range(1, $sk) as $key2 => $_) {
            $masyvasSk[$key1][] = rand(0, 10); 
        }
    }
}
_d($masyvasSk);
// 9.	Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite 
// masyvą taip, kad pirmiausiai eitų mažiausios masyvo 
// reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.
echo '<br>';
echo '-----------------9-------';
echo '<br>';
usort($masyvasSk, function($a, $b) {
   $asum = 0;
   if(is_array($a)) {
       foreach($a as $key1) {
           $asum += $key1;
       }
       $a = $asum;
   }
   
   $bsum = 0; 
   if(is_array($b)) {
       foreach($b as $key1) {
           $bsum += $key1;
       }
       $b = $bsum;
   }
   return $a <=> $b;
}
);