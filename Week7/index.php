<?php 
    session_start();
    
    setcookie("myCookie", "Test Cookie",time()+10);

    $_SESSION["mySession"] = 'Test Session';
    echo $_COOKIE["myCookie"]."<br>";
    echo $_SESSION["mySession"]."<br>";
?>