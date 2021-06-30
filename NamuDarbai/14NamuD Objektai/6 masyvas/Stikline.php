<?php

class Stikline {

    private $turis, $kiekis = 0;

    public function __construct($turis) 
    {
        $this->turis = $turis;
    }


    public function ipilti($kiekis)
    {
        $this->kiekis = min($this->turis, $this->kiekis + $kiekis);
        return $this;
    }

    public function ispilti()
    {
        $kiekis = $this->kiekis;
        $this->kiekis = 0;
        return $kiekis;
    }

}