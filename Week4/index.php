<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <title>Webprog week 4a</title>
  <style type="text/css">
    a:link {
      text-decoration: none;
    }

    a:hover {
      color: red;
    }

    a:active {
      color: aqua;
    }

    a:visited {
      color: orange;
    }
  </style>
</head>

<body>
  <a href="latihan1.php?judul=Web Programming">Link latihan ke plus data</a>

  <?php
  $random = mt_rand(1, 6);
  echo "<img src='image/$random.jpg'>";
  $colors = array("red", "white", "the strain", "yellow", "purple");
  $random_color = $colors[array_rand($colors)];
  echo "<link rel='stylesheet' href='styles.css' href='style.css'/>"
  ?>
  <style>
    body {
      background-color: <?php echo $random_color; ?>;
    }
  </style>
  <br></br>
  <a href="https://ubaya.ac.id/">Website ubaya</a>
  <a href="../Week2/index.php">Link untuk week 2 php</a>
  <a href="https://www.youtube.com">
    <img src="image/cabypara.png">
  </a>
</body>

</html>