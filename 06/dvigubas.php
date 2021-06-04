<?php


$masyvas = [];

foreach (range(1, 5) as $keyBig => $_) {
    if (rand(0, 1)) {
        foreach (range(1, 5) as $keySmall => $_) {
            $masyvas[$keyBig][$keySmall] = rand(5, 25);
        }
    }
    else {
        $masyvas[$keyBig] = rand(5, 25);
    }
}

_d($masyvas);


foreach ($masyvas as $val) {
    if (is_array($val)) {
        foreach ($val as $val2) {
            _d($val2);
        }
    }
    else {
        _d($val, 'skaicius');
    }
}