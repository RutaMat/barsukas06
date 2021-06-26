<?php


  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sąskaitų sąrašas </title>
</head>
<body>
    
    <?php include __DIR__ . '/menu.php' ?> 
    <?php include __DIR__ . '/msg.php' ?>   
    <h1>Sąskaitų sąrašas</h1>
    <a href="?action=naujaSaskaita">Pridėti naują sąskaitą</a><br><br>

    <?php usort($sarasas, function ($a, $b) {
             return $a['pavarde'] <=> $b['pavarde'];
        });?>

    <ul>
    
        <?php foreach($sarasas as $saskaita){ ?>
        
            <li>Vardas <?= $saskaita['vardas'] ?></li>
            <li>Pavarde <?= $saskaita['pavarde'] ?></li>
            <li>Asmens kodas <?= $saskaita['asmensKodas'] ?></li>
            <li>Sąskaitos Nr. <?= $saskaita['saskaitosNr'] ?></li>
            <li>Likutis <?= $saskaita['suma'] ?></li>
            <a href="?action=pridetiLesu&id=<?= $saskaita['id'] ?>">Pridėti lėšų</a>
            <a href="?action=nuskaiciuotiLesas&id=<?= $saskaita['id']?>">Nuskaičiuoti lėšų</a>
            <form action="?action=trynimas&id=<?= $saskaita['id'] ?>" method="post"> 
            
            <button type="submit">Ištrinti sąskaitą</button>

            </form>
        <?php } ?>  
           

    </ul>

</body>
</html>
