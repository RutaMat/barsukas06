<?php

$host = '127.0.0.1';
$db   = 'f22';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // kaip masyvas
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);

// Seeder
$trees = [
    ['Beržas', rand(0, 1500) / 100, 1],
    ['Eglė', rand(0, 1500) / 100, 2],
    ['Pušis', rand(0, 1500) / 100, 2],
    ['Kedras', rand(0, 1500) / 100, 2],
    ['Palmė', rand(0, 1500) / 100, 3],
    ['Agrastas', rand(0, 1500) / 100, 2],
    ['Šermukšnis', rand(0, 1500) / 100, 1],
    ['Kaštonas', rand(0, 1500) / 100, 1],
];
$n = rand(0, count($trees) -1 );
//Irasymas
// INSERT INTO table_name (column1, column2, column3,...)
// VALUES (value1, value2, value3,...)

// $sql = "INSERT INTO trees (`name`, height, `type`)
// VALUES ('Beržas', 1.20, 1)
// ";

$sql = "INSERT INTO trees (`name`, height, `type`)
VALUES ('".$trees[$n][0]."', ".$trees[$n][1].", ".$trees[$n][2].")
";
$pdo->query($sql);


//Skaitymas
//SELECT column1, column2, column3,... FROM table_name

$sql = "SELECT id, `name`, height, `type`
FROM trees
WHERE (`type` = 2 AND height > 10) OR (`type` = 1 AND height < 10) OR `type` = 3
ORDER BY `name` DESC
-- LIMIT 5
";
//cia kalba apie tai kad grąžina paziureti
$stmt = $pdo->query($sql); // DB steitmentas-dumenu bazes pareiskimas stmt
while ($row = $stmt->fetch()) // duok man viena eilute fetc-grazina po eilute nuo1mos iki 
{
    echo $row['id'].' '.$row['name'].' '.$row['height'].' '.$row['type'].'<br>';
    //kreipiuosi uzklausa, atgal gaunu statment tada ciklas ir fechinamas ir toje eiluteje duomenys irasyti asociatyviam masyve
}

