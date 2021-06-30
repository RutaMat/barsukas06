<?php

require __DIR__ . '/Tenisininkas.php';


$t1 = new Tenisininkas('Rapolas');
$t2 = new Tenisininkas('Mykolas');

Tenisininkas::zaidimoPradzia();

$t1->perduotiKamuoliuka();
$t2->perduotiKamuoliuka();
$t1->perduotiKamuoliuka();
$t2->perduotiKamuoliuka();

echo '<pre>';
var_dump($t1);
var_dump($t2);