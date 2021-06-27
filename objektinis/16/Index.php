<?php
//cia gaminamas televizorius

require __DIR__. '/Tv.php';
// require __DIR__. '/Cart.php';

// Tv::keistiPrograma(1, 'LRT88');
// tv su istrizainem
$TV1 = new Tv(32);
$TV2 = new Tv(108);
$TV3 = new Tv(46);




$TV2->rodyti(1);
$TV1->rodyti(1);
$TV3->rodyti(1);


// $cart1 = Cart::getCart();
// $cart2 = Cart::getCart();

// echo '<pre>';
// var_dump($cart1);
// echo '<br>';
// var_dump($cart2);