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

echo ++$uzduotis; 
echo '<br><br>';
// 5.Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” 
// (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.

$american = 'An American in Paris';
$replace = '*';
$subject   = ['A', 'a'];
$output  = str_replace($subject, $replace, $american);
echo $output;
echo '<br><br>';

// 6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas
//  “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.
echo ++$uzduotis; 
echo '<br><br>';
$str = str_replace($subject,"", $american, $count);
//$str = str_replace($subject,"", 'An American in Paris', $count);
echo $count;
echo '<br><br>';

// 7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses.
//  Rezultatą atspausdinti. Kodą pakartoti su stringais:
//  “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.

echo ++$uzduotis; 
echo '<br><br>';
$vowels = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];
$brekfast = "Breakfast at Tiffany's";
$space = '2001: A Space Odyssey';
$life = "It's a Wonderful Life";

$output  = str_replace($vowels, "", $american);
echo "$american [ $output ] <br>";
$output  = str_replace($vowels, "", $brekfast);
echo "$brekfast [ $output ]<br>";
$output  = str_replace($vowels, "", $space);
echo "$space [ $output ]<br>";
$output  = str_replace($vowels, "", $life);
echo "$life [ $output ]<br><br>";

// 8.Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.
// str_repeat(' ', rand(0,5)). rand(1,9) .
//  ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.

echo ++$uzduotis; 
echo '<br><br>';
$starWars = 'Star Wars: Episode '. str_repeat(' ', rand(0, 5)). rand(1, 9) . ' - A New Hope';
echo $starWars . '<br> ';
echo 'Epizodas: ' .preg_replace('/[^0-9]/', '', $starWars);
echo '<br><br>';
// 9.Suskaičiuoti kiek stringe
// “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” 
// yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu 
// “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.

echo ++$uzduotis; 
echo '<br><br>';
 $eng = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
 $ltu = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';


// 10. Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių.
//  Stringo ilgis 3 simboliai.
 
echo ++$uzduotis; 
echo '<br><br>';
$n=3;
function getRandomString($n) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $randomString = '';
  
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
  
    return $randomString;
}
  
echo getRandomString($n);