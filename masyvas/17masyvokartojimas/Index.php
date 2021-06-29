<?php


$masyvas = [];
$masyvas = [1, 3, 18];

$masyvas = array();
$masyvas = array(1, 3, 18);


$masyvas = [7 => ['b', 'z'], 8 => ['c', 'g'], 'd' => ['a', 'f']];

_dc($masyvas);

// sort($masyvas);


usort($masyvas, fn($a, $b) => 0 * ($a[1] <=> $b[1]));


_dc($masyvas);