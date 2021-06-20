<?php
$id = $_GET['id'] ?? 0;
foreach ($boxes as &$box) {
    if ($box['id'] == $id) {
        $box['amount']-= (int) $_POST['amount'];
        file_put_contents(__DIR__.'/boxes.json', json_encode($boxes));
        redirect();
    }
}