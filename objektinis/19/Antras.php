<?php

class Antras extends Stogas {

    public function doAntras()
    {
        $k1 = $this->getKampas1();
        $k2 = $this->getKampas2();
        $k3 = $this->getKampas3();
        $k4 = $this->getKampas4();
        return $k1 * $k2 * $k3 * $k4;
    }
    

}