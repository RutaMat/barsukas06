<?php
// 1.Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą 
// ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.
$uzduotis = 1;
echo $uzduotis; 
echo '<br>';
echo '<br>';

$vardas = 'Anthony';
$pavarde = 'Hopkins';

if (strlen($vardas) < strlen($pavarde)) {
    echo "$vardas";
} elseif(strlen($vardas) > strlen($pavarde)){
    echo "$pavarde";
} else echo "$vardas $pavarde";
echo '<br><br>';

// 2.Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
//  Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
echo ++$uzduotis; 
echo '<br>';
echo '<br>';

$vardas = strtoupper($vardas);
echo $vardas;
$pavarde = strtolower($pavarde);
echo " $pavarde <br><br>";
//  3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę
//   kaip stringus. Sukurti trečią kintamąjį ir
//  jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

echo ++$uzduotis; 
echo '<br>';
echo '<br>';
$treciasKintamas = "$vardas[0]$pavarde[0]";
echo strtoupper($treciasKintamas);
echo '<br><br>';
// 4.Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę 
// kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą,
//  sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

echo ++$uzduotis; 
echo '<br>';
echo '<br>';
$vardas = 'Anthony';
$pavarde = 'Hopkins';

$vardas3R = substr("$vardas", 4, 3);
$pavarde3R = substr("$pavarde", 4, 3);
echo strtoupper("$vardas3R$pavarde3R");
echo '<br><br>';
