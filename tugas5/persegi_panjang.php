<?php 
  // Require PHP Induk Class
  require_once "bentuk2dimensi.php";
  
  // Class Persegi Panjang
  class persegipanjang extends bentuk2dimensi {
    //Function1 : Memanggil Variable
    public $panjang;
    public $lebar;
    
    //Function2 : Memanggil Constructor
    public function __construct($panjang, $lebar) {
      $this->panjang = $panjang;
      $this->lebar = $lebar;
    }
    
    //Function3 : Memanggil Method Nama Bidang Persegi Panjang
    public function namabidang() {
      echo "Persegi Panjang";
    }
    
    //Function4 : Memanggil Method Luas Bidang Persegi Panjang
    public function luasbidang() {
      $luas = $this->panjang * $this->lebar;
      return $luas;
    }
    
    //Function5 : Memanggil Method Keliling Bidang Persegi Panjang
    public function kelilingbidang() {
      $keliling = 2 * ($this->panjang + $this->lebar);
      return $keliling;
    }

    //Function6 : Memanggil Method Keterangan Bidang Datar Persegi Panjang
    public function keterangan() {
      echo 'Panjang: '. $this->panjang;
      echo '<br /> Lebar: '. $this->lebar;
    }
  }