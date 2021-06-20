<?php
session_start();
function redirect() 
{
    header('Location: http://localhost/barsukas06/WEB%20mechanika/12/agurkai/');
    die;
}
function redirectToAction($action, $id = 0) 
{
    if ($id) {
        header('Location: http://localhost/barsukas06/WEB%20mechanika/12/agurkai/?action='.$action.'&id='.$id);
    }
    else {
        header('Location: http://localhost/barsukas06/WEB%20mechanika/12/agurkai/?action='.$action);
    }
    die;
}
// redirectBack()  //

function getMessage()
{
    if (!isset($_SESSION['msg'])) {
        return false;
    }
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
    return $msg;
}

function setMessage(string $msg)
{
    $_SESSION['msg'] = $msg;
}

// box ['id' => 25, 'amount' => 258]

if (!file_exists(__DIR__.'/boxes.json')) {
    file_put_contents(__DIR__.'/boxes.json', json_encode([]));
}
$boxes = json_decode( file_get_contents(__DIR__.'/boxes.json'), 1);
//


//Routerio Prosenelis

// 1. Agurku deziu saraso atvaizdavimas GET
if (!isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/home.php';
}

// 2. Pridejimo atvaizdavimas GET
elseif ($_GET['action'] == 'add' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/add.php';
}

// 3. Pridejimo vykdymas POST
elseif ($_GET['action'] == 'add' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doAdd.php';
}

// 4. Isemimo atvaizdavimas GET
elseif ($_GET['action'] == 'rem' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/rem.php';
}

// 5. Isemimo vykdymas POST
elseif ($_GET['action'] == 'rem' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doRem.php';
}

// 6. Naujos dezes pridejimo atvaizdavimas GET
elseif ($_GET['action'] == 'add-box' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/addBox.php';
}

// 7. Naujos dezes pridejimo vykdymas POST
elseif ($_GET['action'] == 'add-box' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doAddBox.php';
}

// 8. Dezes trynimo vykdymas POST
elseif ($_GET['action'] == 'delete' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doDelete.php';
}