<?php
//pak, buat folder sendiri yah. jangan di repo saya (Muchlis)
 // Class Induk
 class Kendaraan {
    public $jenis;

    public function __construct($jenis){
        $this->jenis= $jenis;
    }
    public function infoKendaraan(){
        echo "Ini adalah kendaraan jenis $this->jenis.\n";
    }
 }
 //class Anak
 class Motor extends Kendaraan {
    public $merk;
	
	public function __construct($jenis, $merk) {
	    parent::__construct($jenis); // Memanggil konstruktor class induk
	    $this->merk = $merk;
 }
     public function infoMotor() {
         echo "Ini adalah motor merek $this->merk.\n";
     }
    }

    //Membuat object dari kelas induk
    $kendaraan = new Kendaraan("roda empat");
    $kendaraan->infoKendaraan();
    $kendaraan->infoMotor();

    //Membuat object dari kelas anak
    $motor = new Motor("dua roda","Yamaha");
    $motor->infoKendaraan();
    $motor->infoMotor();
    ?>
