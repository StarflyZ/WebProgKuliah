<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //$data = $_GET['Judul'];
    //echo $data;

    if (isset($_GET['no'])) {
        $no = $_GET['no'];
        echo "Nomor yang di klik adalah no $no";
    }

    $n = 5;
    echo "<ul>";
    for ($i = 1; $i <= $n; $i++) {
        echo "<a href = 'latihan_proses.php?no=$i'>Nomor $i</a><br>";
    }
    echo "</ul>";
    ?>
</body>

</html>