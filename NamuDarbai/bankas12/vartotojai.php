<?php

$vartotojai = [
    ['vardas' => 'Vaidas', 'slaptazodis' => md5('123')],
    ['vardas' => 'Saule', 'slaptazodis' => md5('123')],
    ['vardas' => 'Arvydas', 'slaptazodis' => md5('123')],
];
file_put_contents(__DIR__.'/vartotojai.json', json_encode($vartotojai));