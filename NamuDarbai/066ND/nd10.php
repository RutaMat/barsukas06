<?php
// 10.	Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų.
//  Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color.
//   Reikšmė value vienas iš atsitiktinai parinktų 
//   simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. 
//   Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės 
//   nuspalvintos spalva color.
echo '<br>';
echo '-----------10-------------';
echo '<br>';

$masyvasD = [];
$string = '#%+*@裡';


foreach(range(1, 10) as $index => $val) {
    $masyvasD[] = [];
   foreach (range(1, 10) as $index2 => $val2) {
      $masyvasD[$index][] =  [  // nulines eilutes masyvas galima dar []vietoj[$index2]
      $string[rand(0, 6)],
      '#'. rand(0, 999999)
      ];
   }
}
foreach($masyvasD as $index => $val) {
    foreach ($val as $index2 => $val2) {
        echo "<span style = 'color: ". $val2[1]. "'>". $val2[0]. "</span>";
    }
    echo "<br>";
}


// function customStringGenerator()
// {
//     $string = '#%+*@裡';
//     $arr = str_split($string, 5);
//     $stringArray = str_split($arr[0]);
//     $stringArray[] = $arr[1];
//     return $stringArray[rand(0, count($stringArray) - 1)];
// }

// function rand_color() {
//    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
// }
