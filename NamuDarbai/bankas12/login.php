<?php
//scenarijai

if($_SERVER['RQUEST_METHOD'] == 'GET') {
//1.Rodyti foma


} else {
    //2 Tikrinti prisijungimo duomenis
    $vartotojai = json_decode(file_get_contents(__DIR__.'/vartotojai.json'), 1);
    foreach ($vartotojai as $vartotojas) {
        if ($vartotojas['name'] == $_POST['name'] { // jeigu name sutinka su Posto name is formos tuomet turime name. tikrinam pasw
            if ($vartotojas['pass'] == md5($_POST['pass'])) {
              //kadangi buvo suhesintas pass cia ta pat padarome post
              //susikuriam logged - isgalvotas pav ir isgalvotas 1 - flagas, 
              $_SESSION['logged'] = 1
              //jeigu user savo sesijoj logged tuomet tas user
              $_SESSION['name'] = $vartotojas['name']; //tam kad pasisveikintu
              header('Location: http://localhost/barsukas06/NamuDarbai/bankas12/member.php');
              die;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
</head>
<body>

<?php include __DIR__ . '/login.php' ?>
<h1>Login</h1>
<!-- kadangi kreipimaisi eina i ta pat psl. gali buti action tuscia -->
<form action="http://localhost/barsukas06/NamuDarbai/bankas12/login.php"></form> 
<input type="text" name="vardas">
<input type="password" name="pass" >
<button type="submit">Login</button>
    
</body>
</html>