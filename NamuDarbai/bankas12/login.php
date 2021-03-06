<?php
session_start();

require __DIR__ . '/msg.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['logout'])) {
        //  atjungia user
        unset($_SESSION['logged'], $_SESSION['name']);
        setMessage('Sesija baigta!');
        header('Location: http://localhost/barsukas06/NamuDarbai/bankas12/login.php');
        die;
    }
} else {

    //2 Tikrinti prisijungimo duomenis
    $vartotojai = json_decode(file_get_contents(__DIR__ . '/vartotojai.json'), 1);
    foreach ($vartotojai as $vartotojas) {
        if ($vartotojas['name'] == $_POST['name']) { // jeigu name sutinka su Posto name is formos tuomet turime name. tikrinam pasw
            if ($vartotojas['pass'] == md5($_POST['pass'])) {
                //kadangi buvo suhesintas pass cia ta pat padarome post
                //susikuriam logged - isgalvotas pav ir isgalvotas 1 - flagas, 
                $_SESSION['logged'] = 1;
                //jeigu user savo sesijoj logged tuomet tas user
                $_SESSION['name'] = $vartotojas['name']; //tam kad pasisveikintu
                setMessage('Sėkmingas prisijungimas! ');
                
                header('Location: http://localhost/barsukas06/NamuDarbai/bankas12/member.php');
                die;
            } 
        } else {
            setMessage('Neteisingi vartotojo duomenys! ');
            header('Location: http://localhost/barsukas06/NamuDarbai/bankas12/login.php');
            die;
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

    <?php include __DIR__ . '/menu.php' ?>
    <h1>Login</h1>
    <!-- kadangi kreipimaisi eina i ta pat psl. gali buti action tuscia -->
    <form action="http://localhost/barsukas06/NamuDarbai/bankas12/login.php" method="post">
        <input type="text" name="name">
        <input type="password" name="pass">
        <button type="submit">Login</button>
    </form>
</body>

</html>
