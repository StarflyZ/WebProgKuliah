<?php
	session_start();

	if(isset($_SESSION['data'])) {
		$arr_data = $_SESSION['data'];
	}
	else {
		header("Location: setting.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display Data Mahasiswa</title>
	<style type = text/css>
		body {
			font-size: <?php echo $_COOKIE['ukuran_font']; ?>px;
			<?php 
				if(isset($_COOKIE['tampilan_font']) && $_COOKIE['tampilan_font'] == 'italic') {
					echo "font-style: italic;";
				}
				if(isset($_COOKIE['tampilan_font']) && $_COOKIE['tampilan_font'] == 'bold') {
					echo "font-weight: bold;";
				}
				if(isset($_COOKIE['tampilan_font']) && $_COOKIE['tampilan_font'] == 'underline') {
					echo "text-decoration: underline;";
				}
			?>
		}
		.hidden {
			display: none;
		}
		
	</style>
</head>
<body>
	<?php
		if(isset($_COOKIE['alamat_display']) && $_COOKIE['alamat_display'] == 'tidak') {
			$alamat_tampil = "hidden";
		}
		else {
			$alamat_tampil = "";
		}

		if(isset($_COOKIE['ipk_display']) && $_COOKIE['ipk_display'] == 'tidak') {
			$ipk_tampil = "hidden";
		}
		else {
			$ipk_tampil = "";
		}

		for($i = 0; $i < count($arr_data); $i++) {
			$hitung = $i+1;
			echo "<hr>";
			
			echo $hitung.".<br>";;
			echo "<p>NRP : ".$arr_data[$i]["nrp"]."</p>";
			echo "<p>Nama : ".$arr_data[$i]["nama"]."</p>";
			echo "<p class='$alamat_tampil'>Alamat : ".$arr_data[$i]["alamat"]."</p>";
			echo "<p class='$ipk_tampil'>IPK : ".$arr_data[$i]["ipk"]."</p>";
			echo "<br>";
		}
	?>
	<a href = "index.php">Kembali ke halaman utama</a>
</body>
</html>