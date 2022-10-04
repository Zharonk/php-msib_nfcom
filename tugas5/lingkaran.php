<?php 
  // Require PHP Induk Class
  require_once "bentuk2dimensi.php";
  
  // Class Lingkaran
  class lingkaran extends bentuk2dimensi {
    
    //Function1 : Memanggil Variable
    public $jari2;
    
    //Function2 : Memanggil Constructor
    public function __construct($jari2) {
      $this->jari2 = $jari2;
    }
    
    //Function3 : Memanggil Method Nama Bidang Lingkaran
    public function namabidang() {
      echo "Lingkaran";
    }
    
    //Function4 : Memanggil Method Luas Bidang Lingkaran
    public function luasbidang() {
      $luas = 3.14 * $this->jari2 * $this->jari2;
      return $luas;
    }

    //Function5 : Memanggil Method Keliling Bidang Lingkaran
    public function kelilingbidang() {
      $keliling = 2 * 3.14 * $this->jari2;
      return $keliling;
    }

    //Function6 : Memanggil Method Keterangan Bidang Lingkaran
    public function keterangan() {
      echo 'Jari-Jari: '. $this->jari2;
    }
  }