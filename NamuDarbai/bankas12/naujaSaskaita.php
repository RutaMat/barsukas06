<?php

$iban = 'LT01 '.rand(1000, 9999). ' '.rand(0000, 9999). ' '.rand(0000, 9999). ' '.rand(0000, 9999);
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
        <input type="text" name="saskaitosNr" value="<?=$iban?>" readonly><br><br>
        <label for="suma"> Sąskaitos likutis: </label>
        <input type="text" name="suma" ><br><br>
        
        <button>Patvirtinti sąskaitos duomenis</button>
    </form>
    
</body>
</html>
