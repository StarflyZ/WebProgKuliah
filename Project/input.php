<?php
if (!isset($_COOKIE['alamat_wajib']) || !isset($_COOKIE['ipk_default'])) {
  header('Location: setting.php');
  exit;
}

if(isset($_POST['submit'])){
  $mahasiswa = array(
    'nrp' => $_POST['nrp'],
    'nama' => $_POST['nama'],
    'alamat' => $_POST['alamat'],
    'ipk' => $_POST['ipk']
  );

  session_start();
  $_SESSION['data'][] = $mahasiswa;
  
  header('Location: display.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Halaman Input</title>
  <style>
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type=text], textarea {
      width: 300px;
      margin-bottom: 10px;
    }
    input[type=submit] {
      margin-top: 10px;
      display: inline-block;
      padding: 10px 20px;
      background-color: #4caf50;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      margin-right: 10px;
    }
    h1{
      font-size: 32px;
      text-align: center;
      margin-bottom: 20px;
    }
    label {
    display: block;
    margin-bottom: 10px;
    font-size: 18px;
    }
    input[type="text"]{
      display: block;
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid gray;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    }
    textarea{
      padding: 10px;
      border-radius: 10px;
      border: 1px solid gray;
      font-family: Arial, sans-serif;
      font-size: 16px;
      line-height: 1.5;
      color: #333;
      background-color: #f7f7f7;
      resize: none;
    }
  </style>
</head>
<body>
  <h1>Input Data Mahasiswa</h1>
  <form method="post">
    <label>NRP Mahasiswa:</label>
    <input type="text" name="nrp" value="" required>
    <label>Nama Mahasiswa:</label>
    <input type="text" name="nama" value="" required>
    <label <?php echo ($_COOKIE['alamat_wajib'] == 'ya') ? 'required' : 'style="display:none"'; ?>>Alamat Mahasiswa:</label>
    <textarea name="alamat" <?php echo ($_COOKIE['alamat_wajib'] == 'ya') ? 'required' : 'style="display:none"'; ?>></textarea>
    <label>IPK Mahasiswa:</label>
    <input type="text" name="ipk" value="<?php echo $_COOKIE['ipk_default']; ?>" required><br><br>
    <input type="submit" name="submit" value="Simpan">
  </form>
</body>
</html>