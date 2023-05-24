<?php 
    session_start();
    setcookie("myCookie", "Test Cookie",time()+10);
    echo $_COOKIE["myCookie"]."<br>";
    echo $_SESSION["mySession"]."<br>";
?>