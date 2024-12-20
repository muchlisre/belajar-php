<?php
//pak, buat folder sendiri yah. jangan di repo saya (Muchlis)

// kelas 'mobil'
class Mobil {
    public $merek;
    public $tahun;

    // konstruktor untuk menginisialisasi atribut
    public function __construct($merek, $tahun){
        $this->merek = $merek;
        $this->tahun = $tahun;
    }

    // metode untuk menampilkan informasi mobil 
    public function info(){
        return "mobil ini adalah $this->merek tahun $this->tahun.";
    
    }
    public function gaskeun (){
        return "breum...breum...";
    }
}


// Membuat objek baru dari kelas Mobil
$mobil = new Mobil("Toyota",2020);

// Menampilkan informasi mobil
echo $mobil->info();
echo $mobil->gaskeun();
?>