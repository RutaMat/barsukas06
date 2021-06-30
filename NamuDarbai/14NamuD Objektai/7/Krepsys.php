<?php

class Krepsys {

    const DYDIS = 500;
    private $pririnkta = 0;

    public function deti(Grybas $grybas)
    {
        if ($grybas->valgomas && !$grybas->sukirmijes) {
            $this->pririnkta += $grybas->svoris;
        }
        return self::DYDIS > $this->pririnkta;
    }

}