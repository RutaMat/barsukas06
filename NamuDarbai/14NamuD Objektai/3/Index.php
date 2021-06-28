<?php
require __DIR__ . '/Kibiras2.php';

$kibiras1 = new Kibiras2();
$kibiras2 = new Kibiras2();
$kibiras3 = new Kibiras2();

$kibiras1-> prideti1Akmeni();
$kibiras2-> prideti1Akmeni();

echo $kibiras1->kiekAkmenuVisuoseKibiruoseGet();
echo '<br><br>';

$kibiras2-> kiekPririnktaAkmenu();


echo $kibiras3->kiekAkmenuVisuoseKibiruoseGet();
echo '<br><br>';

$kibiras2->pridetiDaugAkmenu(10);
$kibiras3->pridetiDaugAkmenu(15);

echo $kibiras2->kiekAkmenuVisuoseKibiruose();
echo '<br><br>';