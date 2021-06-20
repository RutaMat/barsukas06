<!-- Kodel idejus hrefe (i save) visa nuoroda, meta puslapis nesaugus? -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mėlyna</title>
</head>
<body style="background-color: blue">
    <h1 style=color:white>Mėlyna</h1>
    <form action="" method="get">
    <a href="./blue.php?=1">Į save</a>
    </form>
<?php
    if(!empty($_GET)) {
        header('Location: https://localhost/barsukas06/0110%20Namu%20darbai/penktas/red.php ');
    }
?>

</body>
</html>