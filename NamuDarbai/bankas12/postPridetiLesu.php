<?php
$id = $_GET['id'] ?? 0;
// echo $id;
// die;   ////tikrinama pagal siuos 2 ar mato ID jei mato toliau tikrinam:
// print_r ($_POST['suma']);  //ar mato suma
// die;
// print_r ($sarasas);  //ar mato suma
// die;

require __DIR__ . '/msg.php';

foreach ($sarasas as &$saskaita) {
    if ($saskaita['id'] == $id) {
        
        $saskaita['suma']+= (int) $_POST['suma']; // ateina is formos Post
        file_put_contents(__DIR__.'/sarasai.json', json_encode($sarasas));
        setMessage(' Sąskaita papildyta ' .$_POST['suma']. ' Eur!');
        redirect();
    }
}
// $saskaita = ['id' => rand(1, 100), 'suma' => 0, 'vardas' => $_POST['vardas'], 'pavarde' => $_POST['pavarde'], 'asmensKodas' => $_POST['asmensKodas'],  'saskaitosNr' => $_POST['saskaitosNr'], 'likutis' =>$_POST['likutis'] ]; 
