<?php


class Zveris extends Miskas {
    protected $name;
    
    public function __construct($name){
        $this->name = $name;
    }


    protected function papasakok(){
        parent::__construct();
        echo "Aš esu žvėris vardu $this->name .<br> get_parent_class($this) ";
       
    }

}