<?php
    print_r($_POST);
    2
    $hero = $_POST['hero'];
    print_r($hero); 
    echo "<br>";

    sort($hero);
    foreach($hero as $key => $value){
        echo "$value <br>";
    }
