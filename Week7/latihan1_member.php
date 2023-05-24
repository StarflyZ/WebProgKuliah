<?php  
    session_start();
    
    if(isset($_SESSION['user'])){
        echo "Welcome: ".$_SESSION['user'];
        echo "<br>";
        echo "<a href='latihan1_logout.php'>Logout</a>";
    }
    else{
        $user = $_POST['user'];
        $pass = $_POST['password'];

        if($pass == "1909"){
            echo "Welcome: $user"; 
            $_SESSION['user'] = $user;
            echo "<br>";
            echo "<a href = 'latihan1_logout.php'>Logout</a>";
        }
        else{
            echo "Password yang anda masukan salah, silahkan coba lagi";
            echo "<br>";
            echo "<a href = 'latihan1.php'>Login ulang </a>";
        }
    }  
?>