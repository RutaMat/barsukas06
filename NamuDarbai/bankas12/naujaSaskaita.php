<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $ak = $_POST['asmensKodas'];
    echo $_POST['asmensKodas'].'<br>';
    if(strlen($ak)==11){
        echo "ilgis geras<br>";
    }
    if(preg_match("/^[0-9]+$/", $ak)){
        echo "vien skaiciai<br>";
    }
    if(substr($ak, 0,1) > 0 && substr($ak, 0,1) < 7 ){
        echo "skaicius tarp 0 ir 7";
    }
    if(substr($ak, 1,3) <7 ){
        echo "skaicius tarp 0 ir 7";
    }
    checkdate ( $month, $day, $year );
    die;
}
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
$iban = "628419848624";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pridėti naują sąskaitą</title>
</head>
<body>

    <?php include __DIR__ . '/menu.php' ?>
    

    <form action="?action=naujaSaskaita" method="post">
        <label for="vardas"> Vardas: </label>
        <input type="text" name="vardas" value="<?= (isset($_GET['vardas'])) ?  $_GET['vardas'] : ""?>" ><br><br>
        <label for="pavarde"> Pavardė: </label>
        <input type="text" name="pavarde"><br><br>
        <label for="asmensKodas"> Asmens kodas: </label>
        <input type="text" name="asmensKodas"><br><br>
        <label for="saskaitosNr"> Sąsakiatos numeris: </label>
        <input type="text" name="saskaitosNr" value="<?= (isset($iban)) ?  $iban : ""?>"><br><br>
        <label for="suma"> Sąskaitos likutis: </label>
        <input type="text" name="suma" ><br><br>
        
        <button>Patvirtinti sąskaitos duomenis</button>
    </form>
    
</body>
</html>
