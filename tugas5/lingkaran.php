<?php 
  require_once "bentuk2dimensi.php";
  
  class lingkaran extends bentuk2dimensi {
    public $jari2;
    
    public function __construct($jari2) {
      $this->jari2 = $jari2;
    }
        
    public function namabidang() {
      echo "Lingkaran";
    }
    public function luasbidang() {
      $luas = 3.14 * $this->jari2 * $this->jari2;
      return $luas;
    }
    public function kelilingbidang() {
      $keliling = 2 * 3.14 * $this->jari2;
      return $keliling;
    }
    public function keterangan() {
      echo 'Jari-Jari: '. $this->jari2;
    }
  }