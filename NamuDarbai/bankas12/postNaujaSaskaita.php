<?php
$saskaita = ['id' => rand(1, 100), 'suma' => 0, 'vardas' => $_POST['vardas'], 'pavarde' => $_POST['pavarde'], 'asmensKodas' => $_POST['asmensKodas'],  'saskaitosNr' => $_POST['saskaitosNr'], 'likutis' => $_POST['suma']];


require __DIR__ . '/msg.php';
// require __DIR__ . '/asmID.php';
if (!empty($_POST['vardas']) && !empty($_POST['pavarde']) && !empty($_POST['asmensKodas']) && !empty($_POST['saskaitosNr'])) {
  


    if (strlen($_POST['vardas']) >= 3 || strlen($_POST['pavarde'] >= 3)) {
    
        if(strlen($_POST['asmensKodas'] == 11)){

    

        } else {
        setMessage('Neteisingas asmens kodas ');
        redirectToAction('naujaSaskaita');
        }
    
    } else { 
        setMessage('Mažiau negu trys raidės varde arba pavardėje. ');
        redirectToAction('naujaSaskaita'); }
        
    } else {   
      setMessage('Užpildyti visus langelius. ');
      redirectToAction('naujaSaskaita'); 
}
// if (empty($_POST['vardas']) || empty($_POST['pavarde']) || empty($_POST['asmensKodas']) || empty($_POST['saskaitosNr'])) {
  
//     setMessage('Užpildyti visus langelius. ');
//     redirectToAction('naujaSaskaita');

foreach ($sarasas as $saskaita) {

    if ($_POST['asmensKodas'] == $saskaita['asmensKodas']) {
        
            
            setMessage('Toks asmens kodas yra. ');
            redirectToAction('naujaSaskaita');
    }

}

// echo $_POST['pavarde'];
// die;  //tokiu budu tikrinama ar atsiranda pavarde ir mirsta

 //nera unikalumo
// $sarasas[] = $saskaita;
// file_put_contents(__DIR__.'/sarasai.json', json_encode($sarasas));

// redirect();

