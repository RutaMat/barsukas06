<?php
// echo $_POST['pavarde'];
// die;  //tokiu budu tikrinama ar atsiranda pavarde ir mirsta
$saskaita = ['id' => rand(1, 100), 'suma' => 0, 'vardas' => $_POST['vardas'], 'pavarde' => $_POST['pavarde'], 'asmensKodas' => $_POST['asmensKodas'],  'saskaitosNr' => $_POST['saskaitosNr'], 'likutis' =>$_POST['likutis'] ]; //nera unikalumo

// $sarasas[] = $saskaita;
// function naujaSaskaita($sarasas)
// {
//     if ($sarasas == null) {
//         $saskaitosNr = 'LT';
//         $saskaitosNr .= rand(10000000000000, 99999999999999);
//         return $saskaitosNr;
//     }
//     $saskaitosNr = 'LT01';
//     $saskaitosNr .= rand(10000000000000, 99999999999999);
//     foreach ($sarasas as $saskaita) {
//         if ($saskaitosNr == $saskaita['$saskaitosNr']) {
//             return naujaSaskaita($sarasas);
//         }
//         return $saskaitosNr;
//     }
// }
file_put_contents(__DIR__.'/sarasai.json', json_encode($sarasas));
setMessage('Atidaryta nauja sąskaita!');
redirect();

