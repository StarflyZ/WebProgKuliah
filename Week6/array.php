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
    $arr = array();
    $arr_standard = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    $arr_mixed = array(1, "A", "B", 2, true);
    $arr_data = array(1, 2, "nama" => "bejo", "gender" => "cowok");

    print_r($arr_standard);
    echo "<br>";
    print_r($arr_mixed);
    echo "<br>";
    print_r($arr_data);

    echo $arr_data["nama"];
    echo "<br>";
    $arr_data["nama"] = "Web prog";
    $arr_data["usia"] = 25;

    print_r($arr_data);

    ?>
</body>

</html>