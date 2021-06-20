  
<?php
$id = $_GET['id'] ?? 0;
foreach ($boxes as &$box) {
    if ($box['id'] == $id) {
        // Validation
        if ($box['amount'] < (int) $_POST['amount']) {
            setMessage('Tiek agurkų nėra.');
            redirectToAction('rem', $id);
        }
        $box['amount']-= (int) $_POST['amount'];
        file_put_contents(__DIR__.'/boxes.json', json_encode($boxes));
        setMessage($_POST['amount'].' Agurkai išimti');
        redirect();
    }
}