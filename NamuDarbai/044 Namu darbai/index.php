<?php
// 1.Naršyklėje nupieškite linija iš 400 “*”. 
// a. Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
// b. Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 

$uzduotis = 1;
echo $uzduotis; 
echo '<br><br>';


// echo "<div style='overflow-wrap: break-word;'>";
// for ($i = 1 ; $i <= 400 ; $i++)
// {
//     echo '*';
// }

$n=50;
echo "<div style='overflow-wrap: break-word;'>";
for ($i = 1 ; $i <= 400 ; $i++)
{
    echo '*';
    if($i==$n)
    {
        echo '<br>';
        $n+=50;
    }
}
echo '</div>';
echo '<hr>';
// for ($i=1; $i < 401 ; $i++) { 

//     echo '*';

//     if($i % 50 == 0) {

//         echo '<br>';

//     } 

// }

// 2.Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos 
//  atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150. 
//  Skaičiai didesni nei 275 turi būti raudonos spalvos.
echo ++$uzduotis;
echo '<br><br>';

 $count = 0;
 for ($i = 0; $i < 300; $i++) {
    
     $atsitiktinisSk = rand(0, 300);
     echo "$atsitiktinisSk"; 

     if ($atsitiktinisSk > 150) {
         $count++;
     }
     if ($atsitiktinisSk > 275) {
        echo "<span style='color: red;'> $atsitiktinisSk</span> " .'  ';
     } else
       echo $atsitiktinisSk;

}
echo "<br> $count";
echo '<br><br>';
// 3.Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus
// tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos.
//  Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. 
//  Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.

echo ++$uzduotis;
echo '<br><br>';

$max = rand(3000, 4000);
$count1 = 0;

for ($i = 1; $i < $max; $i++ ) {
    if($i % 77 === 0) { 
        if($i === 77) {
            echo "<span> $i </span> ";
        } else  
          echo "<span> , $i </span> ";
    }
}
// $randomSkaicius = rand(3000, 4000);
// $stringas = '';
// echo "aibe yra nuo 1 iki $randomSkaicius";
// echo "<br>";
// echo "<br>";

// for ($i=1; $i < $randomSkaicius; $i++) { 
//     if ($i % 77 === 0) {
//         if (strlen($stringas) === 0) {
//             $stringas .= $i ;
//         } else {$stringas .= ', ' . $i ;}
//     }
// }
// echo $stringas;                    galima ir taip
echo '<br><br>';
// Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. 
//Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *

echo ++$uzduotis;
echo '<br><br>';



for ($i = 0 ; $i < 100; $i++) { 
    for ($n = 0; $n < 100; $n++) {
        echo '*'; 
         
       }
       echo '<br>';  
    } 

    
  


