<?php 
  // Require PHP Induk Class
  require_once "bentuk2dimensi.php";
  
  // Class Segitiga 
    class segitiga extends bentuk2dimensi {
    //Function1 : Memanggil Variable
    public $alas;
    public $tinggi;
    
    //Function2 : Memanggil Constructor
    public function __construct($alas, $tinggi) {
      $this->alas = $alas;
      $this->tinggi = $tinggi;
    }

    //Function3 : Memanggil Method Sisi Miring Segitiga
    public function sisiMiring() {
      $sisiMiring = sqrt(pow($this->alas,2) + pow($this->tinggi,2));
      return $sisiMiring;
    }
    
    //Function4 : Memanggil Method Namaa Bidang Segitiga
    public function namabidang() {
      echo "Segitiga";
    }
    
    //Function5 : Memanggil Method Luas Bidang Segitiga
    public function luasbidang() {
      $luas = 0.5 * $this->alas * $this->tinggi;
      return $luas;
    }
    
    //Function6 : Memanggil Method Keliling Bidang Segitiga
    public function kelilingbidang() {
      $keliling = $this->alas + $this->tinggi + $this->sisiMiring();
      return $keliling;
    }
    
    //Function7 : Memanggil Method Keterangan Bidang Datar Segitiga
    public function keterangan() {
      echo 'Alas: '. $this->alas;
      echo '<br /> Tinggi: '. $this->tinggi;
      echo '<br /> Sisi miring: '. $this->sisiMiring();
    }
  }