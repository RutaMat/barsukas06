<?php
$id = $_GET['id'] ?? 0;
// echo $id;
// die;   ////tikrinama pagal siuos 2 ar mato ID jei mato toliau tikrinam:
// print_r ($_POST['suma']);  //ar mato suma
// die;
// print_r ($sarasas);  //ar mato suma
// die;
foreach ($sarasas as &$saskaita) {
    if ($saskaita['id'] == $id) {
        // Validation
        // if ($saskaita['suma'] < (int) $_POST['suma']) {
        //     // setMessage('Tiek lėšų nėra.');
        //     redirectToAction('nuskaiciuotiLesas', $id);
        // }
        $saskaita['suma']-= (int) $_POST['suma'];
        file_put_contents(__DIR__.'/sarasai.json', json_encode($sarasas));
        // setMessage($_POST['suma'].' Pinigai išimti');
        redirect();
    }
}
