<?php


function doArr()
{
    static $c = 20;
    if(--$c < 0) {
        return rand(1, 11);
    }

    foreach (range(1, rand(1, 10)) as $_) {
        if (rand(0, 2)) {
            $masyvas[] = rand(1, 11);
        }
        else {
            $masyvas[] = doArr();
        }

    }
    return $masyvas;
}

_dc( doArr() );