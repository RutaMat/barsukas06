<?php
_d($_SERVER['REQUEST_METHOD'], 'metodas ---->');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    _d($_POST, 'issiusti duomenys');
    //persirediktina su nauju url ok
    header('Location: http://localhost/barsukas/10/?ok'); // get
    die;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voverės ir Zuikiai</title>//1
</head>
<body>
<h1>Voverės ir Zuikiai</h1>
<h2>
<a href="http://localhost/barsukas/10/">Namai</a>
<a href="?rodyti=vovere&puslapis=1">Voverės 1</a> //5
<a href="?rodyti=vovere&puslapis=2">Voverės 2</a>
<a href="?rodyti=zuikis&puslapis=1">Zuikiai 1</a>
<a href="?rodyti=zuikis&puslapis=2">Zuikiai 2</a>
</h2> 
<?php //2

_d($_GET, 'Masyvas $_GET ---->'); //3tik get cia galima viska suarchyvuoti 
// _d($_POST, 'Masyvas $_POST ---->');
//_d($_SERVER['REQUEST_METHOD']); //issiaiskinama koks metodas


if (isset($_GET['rodyti'])) { //cia patikrinam kad butu issetina jeigu irasytu per narsykle
    //4 paruosiam if cikla su puslapiais
    if ($_GET['rodyti'] == 'vovere') {
        echo 'Rodom voveres', ' Puslapis: '. ($_GET['puslapis'] ?? 1);//cia galima css, javascript, paveiksliukai
    }
    elseif ($_GET['rodyti'] == 'zuikis') {
        echo 'Rodom zuikius', ' Puslapis: '. ($_GET['puslapis'] ?? 1);
    }
    else {
        echo 'Tokio neturim';
    }
}

else {
    if(isset($_GET['ok'])) {
        echo '<div style="color:red;">duomenys gauti</div>';
    }
    echo 'Sveiki atvykę į mūsų puslapį';
}




?>
<!-- forma susideda is formos tago-action (analogas href) ir
 metodo get arba post. Norint atitraukti nuo virsaus idedama style -->
<form style="margin:30px;" action="http://localhost/barsukas/10/" method="get">
    <h3>GET</h3>
    <!-- idedam du tekstinius laukelus. Name gali buti rodyti arba puslapis -->
    Ką rodyti: <input type="text" name="rodyti">
    Puslapis: <input type="text" name="puslapis">
    <button type="submit">žiūrėti</button>
</form>
<form style="margin:30px;" action="http://localhost/barsukas/10/" method="post">
    <h3>POST</h3>
    Ką rodyti: <input type="text" name="rodyti">
    Puslapis: <input type="text" name="puslapis">
    <button type="submit">žiūrėti</button>
</form>
</body>
</html>


<?php