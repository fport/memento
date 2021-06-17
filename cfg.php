<?php
session_start();
$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="portisite";
$baglan=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);


if ($baglan -> connect_errno)
{
    echo("Bir hata meydana geldi!");
    exit;
}


//echo ("Bağlantı sağlandı!");


?>