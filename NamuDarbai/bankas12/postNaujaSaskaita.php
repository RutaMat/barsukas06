<?php
// echo $_POST['pavarde'];
// die;  //tokiu budu tikrinama ar atsiranda pavarde ir mirsta
$saskaita = ['id' => rand(1, 100), 'suma' => 0, 'vardas' => $_POST['vardas'], 'pavarde' => $_POST['pavarde'], 'asmensKodas' => $_POST['asmensKodas'],  'saskaitosNr' => $_POST['saskaitosNr'], 'likutis' =>$_POST['likutis'] ]; //nera unikalumo
$sarasas[] = $saskaita;
file_put_contents(__DIR__.'/sarasai.json', json_encode($sarasas));

redirect();

