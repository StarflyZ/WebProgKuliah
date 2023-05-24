<?php 
if(isset($_GET['submit'])){
    echo $_GET['user']."<br>"; 
    echo $_GET['pass']."<br>"; 
    echo $_GET['email']."<br>"; 
    echo $_GET['date']."<br>"; 
    echo $_GET['gender']."<br>"; 
    echo $_GET['submit']."<br>"; 
}

if(isset($_POST['submit'])){
    echo $_POST['user']."<br>"; 
    echo $_POST['pass']."<br>"; 
    echo $_POST['email']."<br>"; 
    echo $_POST['date']."<br>"; 
    echo $_POST['gender']."<br>"; 
    echo $_POST['submit']."<br>";
} 
 ?>