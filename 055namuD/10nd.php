<?php
// 10.	Sugeneruokite 10 skaičių masyvą pagal taisyklę:
//  Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. 
// Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. 
// Penktas trečio ir ketvirto suma ir t.t.
$masyvas = [];

foreach (range(1, 10) as $key => $val) {
    $masyvas[] =rand(5, 25);
    _d($val, $key.'-->');
}
_d($masyvas, 'mano masyvas');