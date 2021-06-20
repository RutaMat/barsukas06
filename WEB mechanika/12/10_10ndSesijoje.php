<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //jeigu neturim rezultato tai rodoma forma,
    // jeigu turim tada rodoma rezultatas
    if (!isset($_SESSION['results'])) {   // [5, 1]  [sugeneruota, pazymeta]
    // 1 scenarijus Formos Rodymas GET
    $letters = range('A', 'J');
    $count = rand(3, 10);
    $color = 'black';
    $form = true;
    }
    else {
    // 2 scenarijus Rezultatų Rodymas GET
    $color = 'white';
    $form = false;
    $sugeneruota = $_SESSION['results'][0];
    $pazymeta = $_SESSION['results'][1];
    unset($_SESSION['results']);
    }
}
else {
    // 3 scenarijus Checkboksų skaičiavimas POST
    $_SESSION['results'][0] = $_POST['count'];
    $_SESSION['results'][1] = count($_POST['let'] ?? []);
    header('Location: http://localhost/barsukas06/WEB%20mechanika/12/10_10ndSesijoje.php');
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7 - 9</title>
</head>
<body style="background-color: <?= $color ?>">

    <a href="">BACK</a><br><br>

    <?php if($form) : ?>
        <form action="" method="post" style="background-color: gray;padding: 10px;">
        <input type="hidden" name="count" value="<?= $count ?>">
        <?php foreach ($letters as $letter): ?>
        <label><?= $letter ?></label>
        <input type="checkbox" name="let[]" value="<?= $letter ?>">
        <?php if (--$count === 0) break ?>
        <?php endforeach ?>
        <button type="submit">CAL</button>
        </form>
    <?php else : ?>
        <br>Sugeneruota: <?= $sugeneruota ?>
        <br>Pažymėta: <?= $pazymeta ?>
    <?php endif ?>
</body>
</html>
