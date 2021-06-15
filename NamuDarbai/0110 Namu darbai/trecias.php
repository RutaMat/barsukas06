<!-- 3.	Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje. -->

<?php
// _d($_SERVER['REQUEST_METHOD']);

// $color = "black";
// if(isset($_GET['color'])){
//     $color = "red";
// }


?>
    <?php
    // if (!empty($_GET['x'])) {
    //     echo '<body style="background-color: #'$x';"></body>';
    // }
    ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Juodai</title>
 </head>

 <body>
    <h1 style = "color: white"> Spalvos reguliatorius </h1>
    <h2>
    <a href="http://localhost/barsukas06/0110%20Namu%20darbai/trecias.php">Juodai</a>


<form action="?xxx" method="GET">

<div style="margin:10px;">
    <span style="width:20px">Įvesk spalvos kodą:</span>
    <input type="text" name="xxx">
</div>
<div style="margin:10px;">
    <button type="submit">GET</button>
    </div>
</form>
<?php
    if (!empty($_GET)) {
        echo "<body style='background-color: #".($_GET['xxx'])."'</body>";
    } else { 
        echo '<body style="background-color: black"></body>';
    }
?>
 </body>
 </html>