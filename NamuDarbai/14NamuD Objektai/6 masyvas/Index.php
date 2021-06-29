<?php

require __DIR__ . '/Stikline.php';


$stikline200 = new Stikline(200);
$stikline150 = new Stikline(150);
$stikline100 = new Stikline(100);

$stikline100->ipilti(
    $stikline150->ipilti(
        $stikline200->ipilti(1000)->ispilti()
    )->ispilti()
);

// $stikline200->ipilti(1000);
// $stikline200->ispilti();

echo '<pre>';
var_dump($stikline200);
var_dump($stikline150);
var_dump($stikline100);