<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="">
        <input type="date" name="tanggal1">
        <input type="date" name="tanggal2">
        <input type="submit" name="submit" value="prosses">
    </form>

    <?php 
     if(isset($_GET["submit"])){
        $tgl1 = $_GET['tanggal1'];
        $tgl2 = $_GET['tanggal2'];
        $selisih = strtotime($tgl2) - strtotime($tgl1);
        echo "jarak $tgl1 dan $tgl2 adalah: ".($selisih / 86400)." days";
     } 
     ?>
</body>
</html>