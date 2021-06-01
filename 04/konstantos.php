<?php
define('KONSTANTA', 'Kukutis');
define('KONSTANTA', 'Bubu');

define('lapas', 'Kitas kukutis');// BLOGAI!!!!!!!!!!!

define('kitas_lapas', array('A', 'B'));// VISAI BLOGAI!!!!!!!!!!!

define('KITAS_LAPAS', ['A', 'B']);// GERAI


echo KONSTANTA;
echo '<br>';
echo lapas;
echo '<br>';
print_r(KITAS_LAPAS);
echo '<br>';
echo KITAS_LAPAS[0];

echo '<br>';
var_dump(defined('KITAS_LAPAS'));
//Magic constants - parodo kelia iki failo kuriame iskvietimas
// Konstanta - nera kintamasis ir nera $ , nerasoma "",  rasom DIDZIOSIOMIS RAIDEMIS
//masyvui - nerasoma echo, o PRINT_R
//define - 1mas argumentas konstanta, 2ras konst reiksme