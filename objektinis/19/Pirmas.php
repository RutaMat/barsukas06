<?php

class Pirmas extends Antras implements Planas  {

    public function doPirmas()
    {
        $k1 = $this->getKampas1();
        $k2 = $this->getKampas2();
        $k3 = $this->getKampas3();
        $k4 = $this->getKampas4();
        return $k1 + $k2 . $k3 + $k4;
    }
    
    public function getKampas1() { return rand(1, 5); }
    public function getKampas2() { return rand(1, 5); }
    public function getKampas3() { return rand(1, 5); }
    public function getKampas4() { return rand(1, 5); }

}