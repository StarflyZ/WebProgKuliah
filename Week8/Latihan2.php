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
        $mk = array(	
            array("status"=> "wajib", "kode"=> "1604A011", "nama"=> "Alpro"),
			array("status"=> "wajib", "kode"=> "1604A021", "nama"=> "OOP"),
			array("status"=> "pilihan", "kode"=> "1604A19A", "nama"=> "Special Topic in AI"),
			array("status"=> "pilihan", "kode"=> "1604A19B", "nama"=> "Special Topic in DS"),
			array("status"=> "pilihan", "kode"=> "1604A19C", "nama"=> "Modelling and Simulation")
			);
        echo "<table border='1'>";     
        echo "<tr>";
        echo "<th>Status</th><th>Kode</th><th>Nama</th>";
        echo "</tr>";
        foreach($mk as $key => $value){
            echo "<tr>";
            echo "<td>".$value['status']."</td>";
            echo "<td>".$value['kode']."</td>";
            echo "<td>".$value['nama']."</td>";
            echo "</tr>";
        }    
        echo "</table>";
        echo "<br><br>";
        $mk2 = array(	
            "wajib" => array(
                array("kode"=> "1604A011", "nama"=> "Alpro"),
                array("kode"=> "1604A021", "nama"=> "OOP")
            ),
            "pilihan" => array(
                array("kode"=> "1604A19A", "nama"=> "Special Topic in AI"),
                array("kode"=> "1604A19B", "nama"=> "Special Topic in DS"),
                array("kode"=> "1604A19C", "nama"=> "Modelling and Simulation")
            )
        );

        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Status</th><th>Kode</th><th>Nama</th>";
        echo "</tr>";
        foreach($mk2 as $key => $value){
            $data = count($value);
            foreach($value as $index => $content){
                echo "<tr>";
                if($index == 0){
                    echo "<td rowspan='$data'>".$key."</td>";
                }
                echo "<td>".$content['kode']."</td>";
                echo "<td>".$content['nama']."</td>";
                echo "<td>".$key."</td>";
                echo "</tr>";
            }
        }

        echo "</table>"
    ?>
</body>
</html>