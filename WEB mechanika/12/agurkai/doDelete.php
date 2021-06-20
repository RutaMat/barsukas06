<?php
$id = $_GET['id'] ?? 0;
foreach ($boxes as $index => $box) {
    if ($box['id'] == $id) {
        unset($boxes[$index]);
        file_put_contents(__DIR__.'/boxes.json', json_encode($boxes));
        redirect();
    }
}