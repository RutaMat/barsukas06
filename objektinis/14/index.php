<?php

// Programuotojas Petras

require __DIR__ . '/Bebras.php';


$bebras1 = new Bebras;
$bebras2 = new Bebras;
$bebras3 = $bebras1;

echo '<pre>';
// var_dump($bebras1);
// echo '<br>';
// var_dump($bebras2);
// echo '<br>';
// var_dump($bebras3);
// echo '<br>';

echo $bebras1->name;

$bebras1->sayHello();