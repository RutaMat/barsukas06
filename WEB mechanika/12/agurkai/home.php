<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agurkų Gamykla</title>
</head>
<body>
    <?php include __DIR__ . '/menu.php' ?>
    <?php include __DIR__ . '/msg.php' ?>
    <ul>
    <?php
        usort($boxes, function($a, $b) {
            return $b['amount'] <=> $a['amount'];
        })
    ?>
    <?php foreach($boxes as $box) : ?>
        <li>
            Dėžė Nr. <?= $box['id'] ?> Viso agukų: <?= $box['amount'] ?>
            [<a href="?action=add&id=<?= $box['id'] ?>">Pridėti</a>]
            [<a href="?action=rem&id=<?= $box['id'] ?>">Išimti</a>]
            <form action="?action=delete&id=<?= $box['id'] ?>" method="post">
            <button type="submit">Išmesti dėžę</button>
            </form>
        </li>
        
    <?php endforeach ?>
    </ul>
</body>
</html>