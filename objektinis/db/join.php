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
//iki cia standartiniai griauciai
/*
SELECT column_name(s)
FROM table1
INNER JOIN table2
ON table1.column_name = table2.column_name;
SELECT column_name(s)
FROM table1
LEFT JOIN table2
ON table1.column_name = table2.column_name;
SELECT column_name(s)
FROM table1
RIGHT JOIN table2
ON table1.column_name = table2.column_name;
-- keiciant join keiciasi uzklausa
*/
$sql = "SELECT `name`, `number`, clients.id as cid, phone.id as pid
FROM clients
INNER JOIN phone
ON clients.id = phone.client_id
ORDER BY clients.name
";
//apacioje standartinis pasiemimas
$stmt = $pdo->query($sql); // DB steitmentas
while ($row = $stmt->fetch()) // duok man viena eilute
{
    echo 'Client id: '.$row['cid'].' '.$row['name'].' Phone id: '.$row['pid'].' '.$row['number'].'<br>';
}