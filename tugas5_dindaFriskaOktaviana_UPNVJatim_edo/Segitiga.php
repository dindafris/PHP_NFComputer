<?php

require_once 'Bentuk2D.php';
class Segitiga extends Bentuk2D{
    public $alas = 10;
    public $tinggi = 12;

    public function namaBidang(){
        echo 'Segitiga';
    }
    
    public function luasBidang(){
        return (($this->alas * $this->tinggi) / 2);
    }
    public function kelilingBidang(){
        $sisi = sqrt(pow(($this->alas/2), 2) + pow(($this->tinggi), 2));
        return (($sisi * 2) + $this->alas);
    }
}
