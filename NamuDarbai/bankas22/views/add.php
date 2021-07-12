<?php require DIR.'views/top.php' ?>

<form action="<?= URL ?>add/<?= $id ?>" method="post">
        <input type="text" name="suma">
        <button>Pridėti lėšų</button>
    </form>

<?php require DIR.'views/bottom.php' ?>