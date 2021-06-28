<?php

$vartotojai = [
    ['name' => 'Vaidas', 'pass' => md5('123')],
    ['name' => 'Saule', 'pass' => md5('123')],
    ['name' => 'Arvydas', 'pass' => md5('123')],
];
file_put_contents(__DIR__.'/vartotojai.json', json_encode($vartotojai));