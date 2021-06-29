<?php



require __DIR__ . '/msg.php';
// require __DIR__ . '/asmID.php';
if (empty($_POST['vardas']) || empty($_POST['pavarde']) || empty($_POST['asmensKodas']) || empty($_POST['saskaitosNr'])) {
  
    setMessage('Užpildyti visus langelius. ');
    redirectToAction('naujaSaskaita');
}

// if (strlen($_POST['vardas']) > 3 || strlen($_POST['pavarde'] > 3)) {
//     setMessage('Per mažai raidžių varde arba pavardėje. ');
//     redirectToAction('naujaSaskaita');
// }

foreach ($sarasas as $saskaita) {

    if ($_POST['asmensKodas'] == $saskaita['asmensKodas']) {
        
            
            setMessage('Toks asmens kodas yra. ');
            redirectToAction('naujaSaskaita');
    }

}

// echo $_POST['pavarde'];
// die;  //tokiu budu tikrinama ar atsiranda pavarde ir mirsta

$saskaita = ['id' => rand(1, 100), 'suma' => 0, 'vardas' => $_POST['vardas'], 'pavarde' => $_POST['pavarde'], 'asmensKodas' => $_POST['asmensKodas'],  'saskaitosNr' => $_POST['saskaitosNr'], 'likutis' => $_POST['suma']]; //nera unikalumo
$sarasas[] = $saskaita;
file_put_contents(__DIR__.'/sarasai.json', json_encode($sarasas));

redirect();

