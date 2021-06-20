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

<!-- <?php include __DIR__ . '/menu.php' ?>  -->

<?php $id = $_GET['id'] ?? 0 ?> 

<form action="?action=pridetiLesu&id=<?= $id ?>" method="post">
<?php foreach ($sarasas as $saskaita) { 
    if ($saskaita['id'] == $id) {
    echo $saskaita['vardas'] . " " . $saskaita['pavarde'] . ". Sąskaitos likutis: " . $saskaita['suma'] . " Eur "; } 
} ?>
    
    <input type="text" name="suma">
    <button> Papildyti sąskaitą </button>


</form>
<br><br>
    <a href="./">Grįžti į pradžią</a>   
</body>
</html>

