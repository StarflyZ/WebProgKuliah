<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>Latihan 4</h1>
    <form action="GET" action="Latihan.php">
      Baris X Kolom
      <input type="Number" name="baris">
      <input type="Number" name="kolom">
      <input type="submit" name="submit" value="Tampilkan">
    </form>
    <?php 
      if(isset($_GET['submit'])){
        $baris = $_GET['baris'];
        $kolom = $_GET['kolom'];

        echo "<table>";

        for($i=1;$i<=$baris;$i++){
          echo "<br>";
          for($j=1;$j<=$kolom;$j++){
            echo "<tr>";
            echo "<td>R-$i C-$j</td>";
          }
          echo "</tr>";
        }       
        echo "</table>";
      } 
    ?>
  </body>
</html>
