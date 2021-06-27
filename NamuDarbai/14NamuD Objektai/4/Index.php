<?php
require __DIR__ . '/Kibiras3.php';
require __DIR__ . '/KibirasNePo1.php';

$KibirasA = new KibirasNePo1;

$KibirasA->Prideti1Akmeni();

echo $KibirasA->kiekPririnktaAkmenu();

