  
<?php require DIR.'views/top.php' ?>


<form action="<?= URL ?>/create_account" method="post">
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

<?php require DIR.'views/bottom.php' ?>