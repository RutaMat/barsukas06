
<!-- 1.	Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) 
į save.
 Viena nuoroda su failo vardu,
  o kita nuoroda su failo vardu 
ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1.
 Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju 
 fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo 
 kintamojo, vėl pasidarytų juodas. -->
 <?php
_d($_SERVER['REQUEST_METHOD']);

$color = "black";
if(isset($_GET['color'])){
    $color = "red";
}
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Juodai</title>
 </head>
 <body style="background-color: <?=$color?>;  ">
    <h1 style = "color: white"> Juodai </h1>
    <h2> 
    <a href="./pirmas.php">Juodai</a> 
    <a href="./pirmas.php?color=1">raudonai</a> 
    </h2>


<!-- <form action="" method="POST">
<button type="submit">sub</button>
</form> -->

 </body>
 </html>