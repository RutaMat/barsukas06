<!-- 7.	Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu. -->
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
        header ('Location: http://localhost/barsukas06/0110%20Namu%20darbai/septintas.php');
        die;    
    }
_d($_SERVER['REQUEST_METHOD']);
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo '<body style="background-color: green">';
    } elseif($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo '<body style="background-color: yellow">';
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="color: white>" >
    <form action="" method="GET">
    <button type="submit"> GET </button>
    </form>

    <form action="" method="POST">
    <button type="submit">POST</button>
    </form>
</body>
</html>