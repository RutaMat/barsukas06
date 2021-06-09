<?php
// 
echo '<br>';
echo '-----------4-5------------';
echo '<br>';
// 4.	Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos
//  argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) 
// Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;
// 5.	Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai
//  nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį
//   mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.
// 6.	Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai
//  nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite 
//  pirminius skaičius.


function divisor(int $digit) : int

{

    if ($digit === 0 || $digit === 1) {

        return 1;

    }

    if ($digit === 2) {

        return 0;

    }



    $divisors = range(2, $digit - 1);//-1 del to kad sal jei yra 8 tai negalima dalinti is pacio saves

    $divCounter = 0;//dalikliu 0

    foreach ($divisors as $div) {

        if ($digit % $div === 0) {

            $divCounter++;

        }

    }

    return $divCounter;

}
//prasideda 5uzd

$mas100 = [];



foreach (range(1, 100) as $_) {

    $mas100[] = rand(33, 77);

}



usort($mas100, function($a, $b) {

    static $cache = [];



    if (!isset($cache[$a])) {

        $cache[$a] = divisor($a);

    }

    if (!isset($cache[$b])) {

        $cache[$b] = divisor($b);

    }

    return $cache[$b] <=> $cache[$a];

});



_d($mas100);

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


