<?php
// 7.	Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi,
// išskyrus paskutinį, 
// elementai yra atsitiktiniai skaičiai nuo 0 iki 10,
// o paskutinis masyvas, kuris generuojamas pagal
//  tokią pat salygą kaip ir pirmasis masyvas.
//  Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;

$arr = genegenerator(rand(10,30));
// print_r($arr);


function genegenerator( $times)
{
    $arr = [];
    $arrSize = rand(10,20); //17
    
    for ($i=0; $i < $arrSize-1; $i++) { //16
        $arr[] = rand(0,10);
    }
    if($times > 0){
    $arr[] =  genegenerator( $times - 1);
    }else{
        $arr[] = 0;
    }
    return $arr;
}
// _dc($arr);

// 8.	Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. 
// Skaičiuoti reikia visuose masyvuose ir submasyvuose.

// _dc($arr);
$result = calc($arr);
// echo $result;
function calc($arr)
{
    $sum = 0;
    foreach ($arr as $value) { 
        if(!is_array($value)){
            $sum += $value;
        }else{
            $sum += calc($value);
        }
    }
    

    return $sum;
}
var_dump( isPrime(6));

function isPrime($n){for($i=$n;--$i&&$n%$i;);return$i==1;}



$masyvas = [];

foreach(range(1, 3) as $_) {

    $masyvas [] = rand(1, 33);

}



while ( !isPrime( $masyvas[(count($masyvas) - 1)])  || 

       !isPrime($masyvas[(count($masyvas) - 2)])  || 

       !isPrime($masyvas[(count($masyvas) - 3)]) ) {

    $masyvas[] = rand(1, 33);

}

print_r($masyvas);
