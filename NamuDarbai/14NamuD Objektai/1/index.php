<?php

require __DIR__ . '/Kibiras1.php';


$kibirasA = new Kibiras1;
$kibirasB = new Kibiras1;

echo $kibirasA->kiekPririnktaAkmenu(), 'A';
echo '<br> <br>';
echo $kibirasB->kiekPririnktaAkmenu(), 'B';
echo '<br> <br>';
echo Kibiras1::kiekVisoPririnktaAkmenu(), 'VISO';
echo '<br> <br>';

$kibirasA->prideti1Akmeni();
$kibirasA->prideti1Akmeni();
$kibirasB->prideti1Akmeni();
echo '<br> <br>';
$kibirasB->pridetiDaugAkmenu(10);
$kibirasA->pridetiDaugAkmenu(3);

echo $kibirasA->kiekPririnktaAkmenu(), 'A';
echo '<br> <br>';
echo $kibirasB->kiekPririnktaAkmenu(), 'B';
echo '<br> <br>';
echo Kibiras1::kiekVisoPririnktaAkmenu(), 'VISO';
echo '<br> <br>';