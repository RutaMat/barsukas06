<?php require DIR.'views/top.php' ?>

<form action="<?= URL ?>rem/<?= $id ?>" method="post">
        <input type="text" name="suma">
        <button>Išimti lėšas</button>
    </form>

<?php require DIR.'views/bottom.php' ?>