<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        .latar-cerah{
            background-color: #fdABAB;
        }
        .latar-gelap{
            background-color: #98A9B0;
        }
    </style>
    <title>Document</title>
</head>

<?php
    $angka = mt_rand(1,10);
    if($angka%2==0){
            echo "<body class = \"latar-cerah\">";
    }
    else{
        echo "<body class = \"latar-gelap\">";
    }
?>
<body class=".latar-cerah">
    <p>Hello world</p>
    <?php
        echo "<p>Hello from php!</p>";
        $a = 10;
        echo $a . "<br>";

        $abs = 90;
        echo $abs;

        $abs = "<br>Hello world";
        echo $abs . "<br>";

        $first_name = "Steven";
        $last_name = "Nataniel";
        $name = $first_name. " " .$last_name;
        echo $name;

        echo "<br>$first_name $last_name";

        $myteam = "<u>The Avengers</u>";
        $yourteam = "<u>Justice League</u>";
        $myleader = "<b>Iron Man</b>";
        $yourleader = "<b>Batman</b>";
        echo "<br>";
        echo "<br>";
        echo "$yourteam adalah kelompok pahlawan super pimpinan \"$yourleader\", sedangkan $myteam
        pimpinannya adalah \"$myleader\"";
        

        
    ?>

    
</body>
</html>