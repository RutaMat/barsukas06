<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Skaičiuotuvas</title>
</head>
<body>
    <h1>Super Skaičiuotuvas</h1>
    <form action="" method="get">
    <div style="margin:10px;">
    <span style="width:20px">X:</span>
    <input type="text" name="x">
    </div>
    <div style="margin:10px;">
    <span style="width:20px">Y:</span>
    <input type="text" name="y">
    </div>
    <div style="margin:10px;">
    <button type="submit">suma</button>
    </div>
    </form>
    <?php
    if (!empty($_GET)) {
        echo '<h3 style="color:blue;">'.($_GET['x'] + $_GET['y']).'</h3>';
    }
    ?>
</body>
</html>