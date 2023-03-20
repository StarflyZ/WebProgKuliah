<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .latar-cerah {
            background-color: #fdABAB;
        }

        .latar-gelap {
            background-color: #98A9B0;
        }

        .warna-merah {
            color: red;
        }

        .warna-biru {
            color: blue;
        }
    </style>
    <title>Document</title>
</head>
<?php
$angka = mt_rand(1, 10);
if ($angka % 2 == 0) {
    echo "<body class = \"latar-cerah\">";
} else {
    echo "<body class = \"latar-gelap\">";
}
?>

<body>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        if ($i % 2 == 0) {
            echo "<p class='warna-biru'>Paragraf ke $i</p>";
        } else {
            echo "<p class = 'warna-merah' >Paragrad ke $i</p>";
        }
    }
    ?>
</body>

</html>