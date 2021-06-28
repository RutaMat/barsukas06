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
        
        // Validation. Jeigu sask yra maziau agurku negu norime paimti
        if ($saskaita['suma'] < (int) $_POST['suma']) {
            setMessage('Trūksta lėšų.');
            redirectToAction('nuskaiciuotiLesas', $id); //griztam i nuskaiciuoti su tuo pat id kuriuo atejom
        }
        $saskaita['suma']-= (int) $_POST['suma'];
        file_put_contents(__DIR__.'/sarasai.json', json_encode($sarasas));
        setMessage ('Išimta iš sąskaitos ' .$_POST['suma']. ' Eur') ;
        redirect();
    }
}
