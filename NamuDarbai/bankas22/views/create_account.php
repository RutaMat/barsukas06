<?php require DIR.'views/top.php' ?>
<?php require DIR.'views/msg.php' ?>
<h2> Užpildyti naują sąskaitą</h2>

    <form action="<?= URL ?>create-account" method="post">
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
        
        <button type="submit">Patvirtinti sąskaitos duomenis</button><br><br>
    </form>
    <a href="<?= URL ?>">Grįžti į sąskaitų sąrašą</a>
<?php require DIR.'views/bottom.php' ?>

