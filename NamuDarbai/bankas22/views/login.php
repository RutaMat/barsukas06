<?php require DIR.'views/top.php' ?>

    <h1>Login</h1>
    <!-- kadangi kreipimaisi eina i ta pat psl. gali buti action tuscia -->
    <form action="<?= URL ?>login" method="post">
        <input type="text" name="name">
        <input type="password" name="pass">
        <button type="submit">Login</button>
    </form>
<?php require DIR.'views/bottom.php' ?>