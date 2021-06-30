<?php
define('ENTER', true);
require __DIR__ . '/bootstrap.php';
// Controllers
require DIR.'app/AgurkaiController.php';

//App
require DIR.'app/App.php';


App::start();

// reikia paprasyti serverio jog padetu susitvarkyti
//kodel? tikslas yra nueiti tiesiai i psl test
//jeigu nera failo kurio reik, tuomet prasau nukreipti i index faila
//reik suprogramuoti serveri per redirect moduli

// $uri = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);
// $uri = explode('/', $uri);

// _d($uri);


// ROUTER
//apacioje visi iskelti i atskirus php
// if ($uri[0] == 'testas' && isset($uri[1])) {
//     (new AgurkaiController)->agurkuTest($uri[1]);
// }
// elseif ($uri[0] === '' && count($uri) === 1) {
//     (new AgurkaiController)->index();
// }

// else {
//     http_response_code(404);
//     echo '<h1>404 PAGE NOT FOUND</h1>';
// }

