<?php 
    $buah = $_GET['buah'];

    if(isset($_COOKIE['buah'])){
        $x = count($_COOKIE['buah']);
    }
    else{
        $x = 0;
    }
    setcookie("buah[$x]",$buah);

    //print_r($_COOKIE);
    header("Location: latihan2_view.php");
    
?>