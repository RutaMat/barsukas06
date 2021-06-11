<?php
//1 rabito nuotrauka nuskaitom
$rabbit = file_get_contents(__DIR__.'/rabbit.png');
//3 reikia patiems susikonstruoti liepima, jog tai paveiksliukas
header('Content-Type: image/png'); //narsykle traktuoja nes serveris paske

header('Bla-Bla: ku-ku');
//2 isechoinam i ekrana/ gaunama heroglifai nes tai yra html
echo $rabbit;