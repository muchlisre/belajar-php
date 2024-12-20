<?php
$pass = "bismillah";
$mail = "muchlis.re@gmail.com";

if($_POST['email']!="" and $_POST['password']!=""){

    if($_POST['email']==$mail){
        if($_POST['password']==$pass){
            echo "Login berhasil";
            header("location:kontak.php");
        }else{
            echo "Password yg anda masukan salah!!";
            header("location:login.php?status=gagal");
        }
    }else{
        echo "Email yg anda masukan salah!!";
        header("location:login.php?status=gagal");
    }
}else{
    echo "Masukan email dan password!!";
    header("location:login.php?status=gagal");
}