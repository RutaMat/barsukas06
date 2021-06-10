<?php
echo '<br>';
echo '-----------9------------';
echo '<br>';
// 9.	Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai
//  nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų yra nors vienas
//   ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą- 
//   atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir 
//   jeigu reikia pridėkite dar vieną elementą.
//  Kartokite, kol sąlyga nereikalaus pridėti elemento. 
 $masyvas = [];

    foreach(range(1, 3) as $_) {

        $masyvas [] = rand(1, 33);

    }

    

    while (isPrime($masyvas[(count($masyvas) - 1)]) > 0 || 

           isPrime($masyvas[(count($masyvas) - 2)]) > 0 || 

           isPrime($masyvas[(count($masyvas) - 3)]) > 0) {

        $masyvas[] = rand(1, 33);

    }



    _d($masyvas, '9 uzduotis');

    //arba toks variantas
    foreach (range(1, 3) as $key => $value) {

        $masyvas[] = rand(1, 33);
    
    }
    
    
    
    $run = 1;
    
    $from = 0;
    
    while ($run == 1) {
    
    
    
        $prime = true;
    
        $row = 0;
    
        for ($i = $from; $i < count($masyvas); $i++) {
    
    
    
            if (modulus($masyvas[$i]) == 0 && $masyvas[$i] != 1) {
    
                $row++;
    
            } else {
    
                $prime = false;
    
            }
    
        }
    
    
    
        if ($prime == false) {
    
            $from++;
    
            $masyvas[] = rand(1, 33);
    
        }
    
        if ($row == 3) {
    
            $run = 0;
    
        }
    
    }
    
    _d($masyvas, '9');
echo '<br>';
echo '-----------9------------';
echo '<br>';
// 10.	Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, 
// kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio didelio masyvo
//  (ne atskirai mažesnių) pirminių skaičių vidurkis mažesnis už 70, suraskite
//   masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. Vėl
//    paskaičiuokite
//  masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite. 