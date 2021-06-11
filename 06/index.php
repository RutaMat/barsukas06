<?php

//realiai siame kode yra prasukama 30k ir isspausdina
$masyvas = [];

foreach (range(1, 30) as $_) {
    $masyvas[] =rand(5, 25);
}
_d($masyvas, 'mano masyvas');
// sugeneruotas masyvas 
//range - funkc.kuri sukuria masyva
//$_ reiskias jog sintaksei reikalingas
// bet nereikalingas uzd. <sprendimui class="man"></sprendimui>

//jeigu norima isitraukti reiksme ir atspausdinti tuomet
// foreach (range(1, 30) as $val) {
//     $masyvas[] =rand(5, 25);
//     _d($val);
// } 
// _d($masyvas, 'mano masyvas');

// //jeigu dar indeksa norima itraukti

// foreach (range(1, 30) as $key => $val) {
//     $masyvas[] =rand(5, 25);
//     _d($val, $key.'-->');
// }
// _d($masyvas, 'mano masyvas');



// $max = 5;
// $indexes = [];
// foreach($masyvas as $key => $val) {
//     //if tikrina ar forycinama reiksme didesne uz max
// if ($val > $max) {
//     //jeigu taip max reiksme tampa nauja su pav val
//     $max = $val;
//     //isvalom masyva kad indeksas nefiksuotu buvusios reiksmes
//     $indexes = [];
// }
// //  reikalingas tam kad irasytumem indeksa
// //jeigu ta rasta max reiksme yra maximaliausia eileje tada prilyginam max
// if ($val == $max){
//     // jeigu yra daugiau tokiu pat reiksmiu indeksas surenka visus indeksu nr 
//     $indexes[] = $key;
//     //ilgesniu budu sudelioja visas reiksmes tame indekse
//     // array_push($indexes, $key); tas pat kas $indexes[] = $key;
// }
// }
// _d($max, 'max');
// _d($indexes, 'indexes');