<?php
echo '<br>';
echo '-----------7------------';
echo '<br>';
// 7.	Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, 
// elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal
//  tokią pat salygą kaip ir pirmasis masyvas.
//  Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;
function doArray($limit) {

    if (--$limit < 0) {

        return 0;

    }

    $masyvas = [];

    $random = rand(10, 20);

        foreach(range(1, $random) as $key => $value) {

            if($random - 1 == $key) {

                $masyvas[] = doArray($limit);

            } else {

                $masyvas [] = rand(0, 10);

            }

        }

    return $masyvas;

}



_dc(doArray(rand(10, 30)), '7 uzduotis');

// 8.	Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. 
// Skaičiuoti reikia visuose masyvuose ir submasyvuose.
echo '<br>';
echo '-----------8------------';
echo '<br>';
function calc($masyvas) {

    $sum = 0;

    foreach($masyvas as $key => $value) {

        if(is_array($value)) {

            cal($value);

        } else {

            $sum += $value;

        }

    }

    return $sum;

} 



_d(calc($masyvas), '8 uzduotis');