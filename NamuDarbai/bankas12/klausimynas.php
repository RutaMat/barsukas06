<!-- Kaip padaryti jog irasius toki pat koda grazintu su teisingai irasytais duomenimis -->

<!-- <form action="?action=naujaSaskaita" method="post">
        <label for="vardas"> Vardas: </label>
        <input type="text" name="vardas" value="<?= (isset($_GET['vardas'])) ?  $_GET['vardas'] : ""?>" ><br><br>
        <label for="pavarde"> Pavardė: </label>
        <input type="text" name="pavarde" value="<?= (isset($_GET['pavarde'])) ?  $_GET['pavarde'] : ""?>" ><br><br>
        <label for="asmensKodas"> Asmens kodas: </label>
        <input type="text" name="asmensKodas" value="<?= (isset($_GET['asmensKodas'])) ?  $_GET['asmensKodas'] : ""?>" ><br><br>
        <label for="saskaitosNr"> Sąskaitos numeris: </label>
        <input type="text" name="saskaitosNr" value="<?= (isset($iban)) ?  $iban : ""?>"><br><br>
        <label for="suma"> Sąskaitos likutis: </label>
        <input type="text" name="suma" ><br><br>
        
        <button>Patvirtinti sąskaitos duomenis</button>
    </form> -->

    
    if (strlen($_POST['vardas']) >= 3 || strlen($_POST['pavarde'] >= 3)) {
    
    if(strlen($_POST['asmensKodas'] == 11)){


$sarasas [] = $saskaita;
file_put_contents(__DIR__.'/sarasai.json', json_encode($sarasas));
setMessage('Nauja saskaita paruosta');
redirect();
    } else {
    setMessage('Neteisingas asmens kodas ');
    redirectToAction('naujaSaskaita');
    }

} else { 
    setMessage('Mažiau negu trys raidės varde arba pavardėje. ');
    redirectToAction('naujaSaskaita'); }