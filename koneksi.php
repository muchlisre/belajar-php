<?php 
$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "muchlis_belajar";

$koneksi = new mysqli($host, $user, $pass, $db);

//cek koneksi ke DB
if($koneksi->connect_error){
    die("Koneksi gagal: ".$koneksi->connect_error);
}