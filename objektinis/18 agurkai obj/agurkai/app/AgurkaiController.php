<?php

class AgurkaiController {


    public function agurkuTest($say)
    {
        echo 'Labas aš AgurkaiController';
        echo '<br>';
        echo $say;
    }

    public function index()
    {
        require DIR.'views/home.php';
    }


}