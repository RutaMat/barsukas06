<?php
$id = $_GET['id'] ?? 0;
foreach ($sarasas as $index => $saskaita) {
        if ($saskaita['id'] == $id) {
           if ( $saskaita ['suma'] == 0) { 
           unset($sarasas[$index]);
           file_put_contents(__DIR__.'/sarasai.json', json_encode($sarasas));
           // setMessage('Sąskaita panaikinta');
           redirect();
           } else echo "Sąskaitoje yra likutis, todėl negalima anuliuoti sąskaitos";
        }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pors</title>
</head>
<body>
<br><br>
    <a href="./">Grįžti į pradžią</a>   
</body>
</html>