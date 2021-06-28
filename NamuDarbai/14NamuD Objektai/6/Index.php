<?php 
require __DIR__. '/Stikline.php';

$stikline1 =  new Stikline(200);
$stikline2 =  new Stikline(150);
$stikline3 =  new Stikline(100);

$stikline1->ipilti(50);
echo $stikline1->getKiekis();
echo $stikline1->kiekis;