<?php



$host = '127.0.0.1';
//cia irasyti savo duomenu bazes pavadinima
$db   = 'f22';

$user = 'root';

$pass = '';

$charset = 'utf8mb4';



$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
//pdo (placiau naudojama)yra tik objektinis.tos pacios bibliotekos gali jungtis
//prie kitu biblioteku ir kitokio tipo biblioteku
//Mysql jungiasi tik prie Marijos
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,

    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

    PDO::ATTR_EMULATE_PREPARES   => false,

];

$pdo = new PDO($dsn, $user, $pass, $options);
$trees = [
    ['Berzas', rand(0, 1500) / 100, 1],
    ['Egle', rand(0, 1500) / 100, 2],
    ['Pusis', rand(0, 1500) / 100, 2],
    ['Kedras', rand(0, 1500) / 100,2],
    ['Palme', rand(0, 1500) / 100, 3],
    ['Agrastas', rand(0, 1500) / 100, 2],
    ['Sermuksnis', rand(0, 1500) / 100, 1],
    ['Kastonas', rand(0, 1500) / 100, 1],

];
$n = rand(0, count($trees) - 1);
// $sql = "INSERT INTO trees (`name`, height, `type`)
// VALUES ('Beržas', 1.20, 1)
// ";

$sql = "INSERT INTO trees (`name`, height, `type`)

VALUES ('".$trees[$n][0]."', ".$trees[$n][1].", ".$trees[$n][2].")
";

$pdo->query($sql);

$sql = "SELECT id, `name`, height, `type`

FROM trees
WHERE `type`<> 2 AND height > 10
ORDER BY `name`
";
$stmt = $pdo->query($sql);
while ($row = $stmt->fetch())
 {
    echo $row['id'].' '.$row['name'].' '.$row['height'].' '.$row['type'].'<br>';
}
$pdo->query($sql);
//redagavimas
$sql = "UPDATE trees
SET height == 1.11
WHERE id = 22
";
$pdo->query($sql);
