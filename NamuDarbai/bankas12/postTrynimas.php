<?php
$id = $_GET['id'] ?? 0;
foreach ($sarasas as $index => $saskaita) {
    if ($saskaita['id'] == $id) {
        unset($sarasas[$index]);
        file_put_contents(__DIR__.'/sarasai.json', json_encode($sarasas));
        // setMessage('Sąskaita panaikinta');
        redirect();
    }
}