<?php
// 1.	Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;
echo '<br>';
echo '-----------1-------------';
echo '<br>';

function labas($sveikinimas)
{
    return '<h1>' . $sveikinimas . '</h1>';
}
echo labas('Labas');
echo '<br><br>';
// 2.	Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas,
//  įterpiamas į h tagą, o antrasis tago numeris (1-6).
//  Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;
echo '<br>';
echo '-----------2-------------';
echo '<br>';

function textNr($sveikinimas, $nr) {
    echo '<h1>' . $sveikinimas .'-'. $nr.'</h1>';
    
}
textNr('Labas', rand(1, 6));

// 3.	Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()).
//  Visus skaitmenis stringe įdėkite į h1 tagą. Jegu iš eilės eina keli skaitmenys, 
//  juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) 
// Keitimui naudokite pirmo uždavinio funkciją ir preg_replace_callback();
echo '<br>';
echo '-----------3-------------';
echo '<br>';

$h1 = function (string|array $text) : string
{
    if (is_array($text)) {
        $text = $text[0];
    }
    return "<h1 style=\"display:inline;\">$text</h1>";
};


$genText = md5(time());
$out = preg_replace_callback('/\d+/', $h1, $genText);

echo $out;

echo '<br>';
echo '-----------4-------------';
echo '<br>';

// 4.	Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas
//  dalijasi be liekanos (išskyrus vienetą ir 
// patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;


function daLyba()
{ 
    $c = 20;

    if(--$c > 0 ) {
        return range(2, $c);
    }
    $valueNew = 0;
    foreach (range(2, $c) as range(2, $c)) {
        $masyvas = [];
        if ($value % --$value == 0) {
          $value = $valueNew;
          $valueNew++;
          
        }
    }
}

_d( daLyba() );
_d($valueNew);
