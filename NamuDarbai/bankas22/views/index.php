

<?php require DIR.'views/top.php' ?>
<?php require DIR.'views/msg.php' ?>

<h1 > Sąskaitų sąrašas</h1>
<a href="<?= URL ?>create-account" ></i> Pridėti naują sąskaitą</a>  


  
    <?php usort($accounts, function ($a, $b) {
             return $b['pavarde'] <=> $b['pavarde'];
        })
    ?>
<ul>
    
    <?php foreach($accounts as $saskaita) { ?>
    
        <li>Vardas <?= $saskaita['vardas'] ?></li>
        <li>Pavarde <?= $saskaita['pavarde'] ?></li>
        <li>Asmens kodas <?= $saskaita['asmensKodas'] ?></li>
        <li>Sąskaitos Nr. <?= $saskaita['saskaitosNr'] ?></li>
        <li>Likutis <?= $saskaita['suma'] ?></li>
        <a href="<?= URL ?>add/<?= $saskaita['id'] ?>">Pridėti lėšų</a>
        <a href="<?= URL ?>rem/<?= $saskaita['id']?>">Nuskaičiuoti lėšų</a>
        <form action="<?= URL ?>delete/<?= $saskaita['id'] ?>" method="post"> 
        
        <button type="submit">Ištrinti sąskaitą</button>

        </form>

    <?php } ?>  
  </ul>    


<?php require DIR.'views/bottom.php' ?>