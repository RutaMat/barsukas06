<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sąskaitos papildymas</title>
</head>
<body>
<h1> Sąskaitos papildymas </h1>
<h2></h2>
<!-- <?php include __DIR__ . '/menu.php' ?>  -->

<!-- <?php $id = $_GET['id'] ?? 0 ?> nukreipimas lesu bei formoje = $id taip pat -->

<form action="?action=pridetiLesu&id=<?= $id ?>" method="post">

  

    
    <input type="text" name="suma">
    <button> Papildyti sąskaitą </button>


</form>
    
</body>
</html>

