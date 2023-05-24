<?php 
    $angka = $_GET['angka']; 
    if($angka%2 == 0){
        //echo "Angka anda adalah GENAP";
        header("location: latihan1_genap.php");
    }
    else{
        //echo "Angka anda adalah GANJIL";
        header("location: latihan1_ganjil.php");
    }
