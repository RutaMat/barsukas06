<?php require DIR.'views/top.php' ?>

<ul>
    <?php 
    usort($boxes, function($a, $b) {
        return $b['amount'] <=> $b['amount'];
    })
    ?>
    <?php foreach($boxes as $box) : ?>
        <li>
            Dėžė Nr. <?= $box['id'] ?> Viso agukų: <?= $box['amount'] ?>
            [<a href="<?= URL ?>add/<?= $box['id'] ?>">Pridėti</a>]
            [<a href="<?= URL ?>rem/<?= $box['id'] ?>">Išimti</a>]
            <form action="<?= URL ?>delete/<?= $box['id'] ?>" method="post">
            <button type="submit">Išmesti dėžę</button>
            </form>
        </li>
    <?php endforeach ?>
    </ul>
<?php require DIR.'views/bottom.php' ?>