<?php
// echo $_POST['pavarde'];
// die;  //tokiu budu tikrinama ar atsiranda pavarde ir mirsta
$saskaita = ['id' => rand(1, 100), 'suma' => 0, 'vardas' => $_POST['vardas'], 'pavarde' => $_POST['pavarde'], 'asmensKodas' => $_POST['asmensKodas'],  'saskaitosNr' => $_POST['saskaitosNr'], 'likutis' => $_POST['suma']]; //nera unikalumo


require __DIR__ . '/autoMSG.php';
require __DIR__ . '/msg.php';

foreach ($sarasas as $saskaita) {

    if ($_POST['asmensKodas'] == $saskaita['asmensKodas']) {
        // if (in_array($_POST['asmensKodas'], $saskaita)) {
        setMessage('Toks asmens kodas yra. ');
        redirectToAction('naujaSaskaita');
    }

}
