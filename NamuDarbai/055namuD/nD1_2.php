<?php


// 1.	Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), 
// kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

echo '-----------------1-----------';
echo '<br>';

$arraySize = 30;
$masyvas = array_fill(0, $arraySize, ' ');
foreach ($masyvas as $index => &$value) {
    $value = rand(5, 25);
    echo "$index =>$value" . '<br>';
   }
echo '-----------------2---a--------';
echo '<br>';
// 2.	Naudodamiesi 1 uždavinio masyvu:
// a)	Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
// b)	Raskite didžiausią masyvo reikšmę ir jos indeksą;
// c)	Suskaičiuokite visų porinių indeksų reikšmių sumą;
// d)	Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
// e)	Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;




unset($value);
$under10 = 0;
foreach($masyvas as $index => $value){

    if($value > 10){

         ++$under10;
    }
};
echo "Reikšmių virš 10 yra $under10"; 
echo '<br>';
echo '-----------------2---b--------';
echo '<br>';
$maxValue = max($masyvas); 
$maxIndex = array_search(max($masyvas), $masyvas);

echo "$maxIndex => $maxValue";
echo '<br>';
echo '-----------------2---c--------';
echo '<br>';
$poriniai = 0;
foreach($masyvas as $index => $value){

    if($index % 2 === 0){
         ++$poriniai;
          
    }
};
echo "Porinius sk. suma $poriniai"; 
echo '<br>';
// f)	Iš masyvo elementų sukurkite du naujus masyvus.
// Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
echo '-----------------2---f--------';
echo '<br>';

$porinisM = [];
$neporinisM = [];
foreach($masyvas as $index => $value){
    if($index % 2 === 0){
        $porinisM[] = $value;
    }else{
        $neporinisM[] = $value;
    }
}
print_r($neporinisM);
print_r($porinisM);

echo '<br>';
echo '-----------------2---e--------';
echo '<br>';
// g)	Pirminio masyvo elementus su poriniais indeksais
// padarykite lygius 0 jeigu jie didesni už 15;

$masyvasE = [];

foreach ($masyvas as $index => $value){
    if($index % 2 === 0 ) {
        
        if( $value > 15) {
            
            $value = 0;
            
           }
           $masyvasE[] = $value;
    } 


}

print_r($masyvasE);
echo '<br>';
echo '-----------------2---h--------';
echo '<br>';
// h)	Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
foreach ($masyvas as $index => $value){
    if($value > 10 ) {
         
        break;}
}
print_r($index);
echo "-->";
print_r($value);

// i)	Naudodami funkciją unset() iš masyvo ištrinkite visus
// elementus turinčius porinį indeksą;
echo '<br>';
echo '-----------------2---i--------';
echo '<br>';

foreach($masyvas as $index => $value){
    if($index % 2 != 0){
        unset($masyvas[$index]);
       
    }
}

print_r($masyvas);


        