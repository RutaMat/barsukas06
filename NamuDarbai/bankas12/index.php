<!-- a.	Sąskaitų sąrašas su mygtuku “ištrinti” ir linku į “pridėti lėšų” ir “nuskaičiuoti lėšas” puslapius -->
<?php

session_start();


function redirect() {
    header('Location:http://localhost/barsukas06/NamuDarbai/bankas12/');
    die;
}

function redirectToAction($action, $id = 0) { //default 0
    if ($id) {
        header('Location:http://localhost/barsukas06/NamuDarbai/bankas12/?action='.$action.'&id='.$id);
        
    } else {
        header('Location:http://localhost/barsukas06/NamuDarbai/bankas12/?action='.$action);
    } 
    die;

}
 // kitu atveju pasiimam msg.
// pasiimam msg(tarpini) kad galetumem atvaizduoti ir
// istrinam kad eiti prie kitu rezultatu, kad jo vis nerodytu naujose reiksmese
function getMessage() {
    
    if(!isset($_SESSION['msg'])) {
        return false;
    }
    $msg = $_SESSION['msg']; 
   
    unset($_SESSION['msg']);
    return $msg;
};

function setMessage(string $msg) {
    $_SESSION['msg'] = $msg;
}



if (!file_exists(__DIR__.'/sarasai.json')) {
    file_put_contents(__DIR__.'/sarasai.json', json_encode([]));
    // pirma kart ateina, neranda masyvo, sukuriamas failas ir idedamas i tuscia masyva. pirmo k. prasukimas 
}
$sarasas = json_decode(   file_get_contents(__DIR__.'/sarasai.json')    , 1);
// var_dump($sarasas);
// die;
// _d($sarasas);
// die;
//1.saskaitu saraso atvaizdavimas get
if (!isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__.' /saskaituSarasas.php';
}

// jeigu failas yra tuomet is json pasiimama is sarasu -->
//saskaitos pridejimas
elseif ($_GET['action'] == 'pridetiLesu' && $_SERVER['REQUEST_METHOD'] == 'GET') {
//2.pridejimo atvaizdavimas get
    require __DIR__. ' /pridetiLesu.php';
}

// 3. Pridejimo vykdymas POST
elseif ($_GET['action'] == 'pridetiLesu' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. ' /postPridetiLesu.php';
    
}

// 4. Isemimo atvaizdavimas GET
elseif ($_GET['action'] == 'nuskaiciuotiLesas' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. ' /nuskaiciuotiLesas.php';
}

// 5. Isemimo vykdymas POST
elseif ($_GET['action'] == 'nuskaiciuotiLesas' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. ' /postNuskaiciuotiLesas.php';
}
//6.naujos sask get pridejimas
elseif ($_GET['action'] == 'naujaSaskaita' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/naujaSaskaita.php';
}
//7. naujos saskaitos darymo vykdymas POST
elseif ($_GET['action'] == 'naujaSaskaita' && $_SERVER['REQUEST_METHOD'] == 'POST') {

    require __DIR__. '/postNaujaSaskaita.php';
}
// 8. Saskaitos trynimo vykdymas POST
elseif ($_GET['action'] == 'trynimas' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/postTrynimas.php';
}

