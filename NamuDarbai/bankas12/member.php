<?php
//tikrinam kad ne bet kas uzeitu
session_start();
if(!isset($_SESSION['logged'])) {
    header( 'Location: http://localhost/barsukas06/NamuDarbai/bankas12/login.php');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Page</title>
</head>
<body>
      <?php include __DIR__ . '/menu.php' ?>
      
</body>
</html>