<?php
// if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    
// $saskaitosNr1 = 'LT01';
// foreach(range(1,16) as $value) {
//     $value = rand(0, 9);
    
// }
// $_POST['saskaitosNr'] = array_merge($saskaitosNr1, $value);
// }

// if ($_SERVER['REQUEST_METHOD'] == 'GET') {
// $iban = "LT";
// }
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
    <?php include __DIR__ . '/msg.php' ?>
    

    <form action="?action=naujaSaskaita" method="post">
        <label for="vardas"> Vardas: </label>
        <input type="text" name="vardas"> <br><br>
        <label for="pavarde"> Pavardė: </label>
        <input type="text" name="pavarde" ><br><br>
        <label for="asmensKodas"> Asmens kodas: </label>
        <input type="text" name="asmensKodas" ><br><br>
        <label for="saskaitosNr"> Sąskaitos numeris: </label>
        <input type="text" name="saskaitosNr" ><br><br>
        <label for="suma"> Sąskaitos likutis: </label>
        <input type="text" name="suma" ><br><br>
        
        <button>Patvirtinti sąskaitos duomenis</button>
    </form>
    
</body>
</html>
