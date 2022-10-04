<?php 
  require_once "bentuk2dimensi.php";
  
  class segitiga extends bentuk2dimensi {
    public $alas;
    public $tinggi;
    
    public function __construct($alas, $tinggi) {
      $this->alas = $alas;
      $this->tinggi = $tinggi;
    }
    
    public function namabidang() {
      echo "Segitiga";
    }
    
    public function luasbidang() {
      $luas = 0.5 * $this->alas * $this->tinggi;
      return $luas;
    }
    
    public function kelilingbidang() {
      $keliling = $this->alas + $this->tinggi + $this->sisiMiring();
      return $keliling;
    }
    
    public function keterangan() {
      echo 'Alas: '. $this->alas;
      echo '<br /> Tinggi: '. $this->tinggi;
    }
  }