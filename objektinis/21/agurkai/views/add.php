<?php require DIR.'views/top.php' ?>

<form action="<?= URL ?>add/<?= $id ?>" method="post">
        <input type="text" name="amount">
        <button>Pridėti agurkų</button>
    </form>

<?php require DIR.'views/bottom.php' ?>