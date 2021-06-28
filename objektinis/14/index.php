<?php

// Programuotojas Petras


require __DIR__ . '/Bebras.php';
require __DIR__ . '/UpinisBebras.php';


$bebras1 = new UpinisBebras('Blue');
$bebras2 = new UpinisBebras;
$bebras3 = $bebras1;

$bebras1->__A__(5);

// echo '<pre>';
// var_dump($bebras1);
// echo '<br>';
// var_dump($bebras2);
// echo '<br>';
// var_dump($bebras3);
// echo '<br>';

$bebras2->name = 'Bobikas';

// echo $bebras1->randomNumber(1000);

// echo $bebras1->getAge();

// $bebras2->setAge(8);
// $bebras2->dfgfgfdgfdgfd = 20;


// $bebras2->addYear();
// $bebras2->addYear();

$bebras1->sayHello();
$bebras2->sayHello();
© 2021 GitHub, Inc.