<!-- 2.	Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos. -->
<!-- <?php
    // if (!empty($_GET)) {
    //     echo '<h3 style="color:blue;">'.($_GET['x'] + $_GET['y']).'</h3>';
    // }
    ?> -->
<!-- echo '<h3 style="color:blue;">'.($_GET['x'] + $_GET['y']).'</h3>' -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juoda</title>
</head>
<body >
    <h1 style = "color: white"> Juodai </h1>
    <h2>
    <a href="http://localhost/barsukas06/0110%20Namu%20darbai/antras.php">Juodai</a>
    <a href="http://localhost/barsukas06/0110%20Namu%20darbai/antras.php?xxx=">RGB</a>
    </h2>
    <?php
    if (!empty($_GET)) {
        echo "<body style='background-color: #".($_GET['xxx'])."'</body>";
    } else { 
        echo '<body style="background-color: black"></body>';
    }
?>
    
</body>
</html>