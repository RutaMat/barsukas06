<?php
$uzduotis = 1;
echo $uzduotis; 
echo '<br>';
echo '<br>';

$vardas = 'Rūta';
$pavarde = 'Matulienė';
$metaiGimimo = 1980;
$metaiDabar = 2021;
$metai = $metaiDabar - $metaiGimimo;
$prisistatymas = "Aš esu $vardas $pavarde. Man yra $metai metai (-ų)";
echo $prisistatymas;
echo '<br>';
echo '<br>';


echo ++$uzduotis; 
echo '<br>';
echo '<br>';


$drambliai = rand(0.00, 4.00);
$begemotai = rand(0.00, 4.00);
echo "Drambliai: $drambliai - Begemotai: $begemotai";
echo '<br>';
echo '<br>';

if ($drambliai != 0 && $begemotai != 0) {
    if ($drambliai > $begemotai) {
        $dramblysDidesnis = round($drambliai / $begemotai, 2);
        echo "Dramblių daugiau $dramblysDidesnis karto";
        
        }
    elseif ($begemotai > $drambliai) {
        $begemotasDidesnis = round($begemotai / $drambliai, 2);
        echo "Begemotų daugiau $begemotasDidesnis karto";
        
        }    
    
    else echo ' Nėra daugiau ';
}
else echo ' Nulis ';

echo '<br>';
echo '<br>';

echo ++$uzduotis;
echo '<br>';
echo '<br>';

$grazy = rand(0, 25);
$jazzy = rand(0, 25);
$magyc = rand(0, 25);
echo "Grazy: $grazy";
echo '<br>';
echo "Jazzy: $jazzy";
echo '<br>';
echo "Magyc: $magyc";
echo '<br>';
echo '<br>';


if ($grazy !== $jazzy && $jazzy !== $magyc && $magyc !== $grazy) {
    if 
    ($jazzy < $grazy && $magyc < $jazzy) {  
    echo "Jazzy: $jazzy" ;
   } elseif  
       ($grazy < $jazzy && $magyc < $grazy ) {
        echo "Grazy: $grazy";
   } elseif 
       ($magyc < $grazy && $jazzy < $magyc) {
       echo "Magyc: $magyc"; 
   }
   else echo "NERANDU klaidos";
} 
else echo 'Neturi vidurinės reikšmės';
echo '<br>';
echo '<br>';

echo ++$uzduotis;
echo '<br>';
echo '<br>';

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
echo "Kraštinė a = $a; b = $b; c = $c";

$ab = $a + $b;
$ac = $a + $c;
$bc = $b + $c;
$rezultatas = ($a < $bc) && ($b < $ac) && ($c < $ab) ? ' Trikampis ' : 'Trikampis nesusidaro';
echo $rezultatas; 
echo '<br>';
echo '<br>';

echo ++$uzduotis;
echo '<br>';
echo '<br>';
$metimas1 = rand(0, 2);
$metimas2 = rand(0, 2);
$metimas3 = rand(0, 2);
$metimas4 = rand(0, 2);

echo "Išmetė keturis kauliukus: $metimas1; $metimas2; $metimas3; $metimas4 ";

$vienetas = 0;
$nulis = 0;
$dvejetas = 0;

if ($metimas1 == 0) {
    $nulis++;
} elseif ($metimas1 == 1) {
    $vienetas++;
} elseif ($metimas1 == 2) {
    $dvejetas++;
}
if ($metimas2 == 0) {
    $nulis++;
} elseif ($metimas2 == 1) {
    $vienetas++;
} elseif ($metimas2 == 2) {
    $dvejetas++;
}
if ($metimas3 == 0) {
    $nulis++;
} elseif ($metimas3 == 1) {
    $vienetas++;
} elseif ($metimas3 == 2) {
    $dvejetas++;
}
if ($metimas4 == 0) {
    $nulis++;
} elseif ($metimas4 == 1) {
    $vienetas++;
} elseif ($metimas4 == 2) {
    $dvejetas++;
}
echo '<br>';
echo "Nulių: $nulis";
echo '<br>';
echo "Vienetų:$vienetas";
echo '<br>';
echo "Dvejetų:$dvejetas";
echo '<br>';
echo '<br>';

    

   
echo ++$uzduotis;
echo '<br>';
echo '<br>';
$tagasH = rand(1, 6);
echo "Atsitiktinis skaičius: $tagasH ";
echo '<br>';


if ($tagasH == 1) {
    echo '<h1> 1 </h2>';
} elseif ($tagasH == 2) {
        echo '<h2> 2 </h2>';
} elseif ($tagasH == 3) {
        echo '<h3> 3 </h3>';
} elseif ($tagasH == 4) {
        echo '<h4> 4 </h4>';
} elseif ($tagasH == 5) {
        echo '<h5> 5 </h5>';
} else echo '<h6> 6 </h6>';
echo '<br>';
echo '<br>';

echo ++$uzduotis;
echo '<br>';
echo '<br>';
$spalva1 = rand(-10, 10);
$spalva2 = rand(-10, 10);
$spalva3 = rand(-10, 10);
echo 'Nustatyti spalvas: žalia < 0, raudona = 0, mėlyna > 0';
echo '<br>';
if ($spalva1 < 0) { 

    echo  "<font color='green'>", $spalva1, "</font><br>";

} elseif ($spalva1 === 0) {
    echo "<font color='red'>", $spalva1, "</font><br>";
    
} else 
    echo "<font color='blue'>", $spalva1, "</font><br>";


if ($spalva2 < 0) { 

    echo  "<font color='green'>", $spalva2, "</font><br>";

} elseif ($spalva2 === 0) {
    echo "<font color='red'>", $spalva2, "</font><br>";
    
} else 
    echo "<font color='blue'>", $spalva2, "</font><br>";

if ($spalva3 < 0) { 

    echo  "<font color='green'>", $spalva3, "</font><br>";

} elseif ($spalva3 === 0) {
    echo "<font color='red'>", $spalva3, "</font><br>";
    
} else 
    echo "<font color='blue'>", $spalva3, "</font><br>";
echo '<br>';


echo ++$uzduotis;
echo '<br>';
echo '<br>';
$zvakes = rand(5, 3000);


// $zvakesVnt = 1;
// $zvakiuKaina = 
// $zvakesSuma = (2000 / $zvakesVnt) + 1;

// if ($zvakes <= 1000) {
    
//     echo "$zvakes po $zvakesVnt Eur";
// } elseif ($zvakes > $zvakesSuma) {
//     $zvakesVnt3 = 1 * 0.97;
   
//     echo "$zvakesSuma po $zvakesVnt3 Eur";
// } else {
//     $zvakesVnt4 = 1 * 0.96;
//     echo "$zvakesSuma po $zvakesVnt4 Eur";
// }

echo ++$uzduotis;
echo '<br>';
echo '<br>';
$skaicius1 = rand(0, 100);
$skaicius2 = rand(0, 100);
$skaicius3 = rand(0, 100);

echo "Skaiciai: $skaicius1 - $skaicius2 - $skaicius3";
echo '<br>';
if ($skaicius1 < 90  && 10 < $skaicius1) {
    $sk1 = "$skaicius1";
  
}
else {
    $sk1 = 0;
   
};
if ($skaicius2 < 90  && 10 < $skaicius2) {
    $sk2 = "$skaicius2";
  
}
else {
    $sk2 = 0;
   
};
if ($skaicius3 < 90  && 10 < $skaicius3) {
    $sk3 = "$skaicius3";
  
}
else {
    $sk3 = 0;
   
};
$average = round(($sk1 + $sk2 + $sk3) / 3, 2);
echo "Vidurkis: $average";
echo '<br>';
echo '<br>';

echo ++$uzduotis;
echo '<br>';
echo '<br>';

// $valandos = rand(00, 23);
// $minutes = rand (00, 59);
// $sekundes = rand (00, 59);
// echo 'LAIKAS VILNIUS';
// echo "[ $valandos : $minutes : $sekundes]";

// $papildomosSekundes = rand(00, 300);

// $sekundes += $papildomosSekundes % 60;
// if ($sekundes > 59) {
//     $sekundes -= 60;
//     $minutes++;
// } 