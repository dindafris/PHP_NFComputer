<?php

require_once 'Bentuk2D.php';
class PersegiPanjang extends Bentuk2D{
    public $panjang = 4;
    public $lebar = 8;

    public function namaBidang(){
        echo 'Persegi Panjang';
    }

    public function luasBidang(){
        return ($this->panjang * $this->lebar);
    }
    public function kelilingBidang(){
        return ((2 * $this->panjang) + (2 * $this->lebar));
    }
}
