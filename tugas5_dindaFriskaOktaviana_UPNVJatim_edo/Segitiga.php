<?php

require_once 'Bentuk2D.php';
class Segitiga extends Bentuk2D{
    public $alas = 10;
    public $tinggi = 12;
    public $sisi = 13;

    public function namaBidang(){
        echo 'Segitiga';
    }
    
    public function luasBidang(){
        return (($this->alas * $this->tinggi) / 2);
    }
    public function kelilingBidang(){
        return (($this->sisi * 2) + $this->alas);
    }
}
