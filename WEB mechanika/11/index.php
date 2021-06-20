<?php
session_start();

// $mas = 'AX';

// $_SESSION['aiksas'] = $mas;

// $_SESSION['aaa'] = range('A', 'Z');



// setcookie('Barsukas', 'Blogas gyvuniukas', time() + 3600 * 24 * 365, '/');

// _d($_COOKIE);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?= $_SESSION['aiksas'] ?>
    <?php echo $_SESSION['aiksas'] ?>
</body>
</html>
