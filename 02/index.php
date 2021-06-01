<?php

$trecias = 5;
$ketvirtas = $trecias / 2;

echo $ketvirtas;
echo '<br>';

echo $trecias++;
echo '<br>';

echo ++$trecias;
echo '<br>';

$pirmas = 'bla bla';
$antras = "ku $pirmas ku";
$trecias = "ai \n\n\n ai";
echo $antras;
echo '<br>';
echo $trecias;
echo '<br>';
echo $$pirmas;

var_dump ('ū');
echo '<br>';
$sk = 1;



echo ++$sk * $sk++;
// 2 * 2



arba:

echo $sk++ * $sk++;
// 1 * 2



arba:

echo $sk++ * ++$sk;
// 1 * 3



arba:

echo ++$sk * ++$sk;
// 2 * 3