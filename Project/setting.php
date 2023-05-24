<?php
if(isset($_POST['submit'])){
  // Simpan ke dalam Cookie
  setcookie('alamat_wajib', $_POST['alamat_wajib'], time() + (86400 * 30), "/");
  setcookie('ipk_default', $_POST['ipk_default'], time() + (86400 * 30), "/");
  setcookie('ukuran_font', $_POST['ukuran_font'], time() + (86400 * 30), "/");
  setcookie('tampilan_font', $_POST['tampilan_font'], time() + (86400 * 30), "/");
  setcookie('alamat_display', $_POST['alamat_display'], time() + (86400 * 30), "/");
  setcookie('ipk_display', $_POST['ipk_display'], time() + (86400 * 30), "/");
  
  // Redirect ke halaman setting.php
  header('Location: index.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Setting</title>
    <style>
      body {
  background-color: #f5f5f5;
  font-family: Arial, sans-serif;
  color: #333;
}

h1 {
  font-size: 32px;
  text-align: center;
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 10px;
  font-size: 18px;
}

input[type="text"], input[type="number"], select {
  display: block;
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}

input[type="radio"]{
  display: inline-block;
  margin-right: 5px;
  position: relative;
  width: 20px;
  height: 20px;
  margin-top: 2px;
}

input[type="radio"]::before{
  content: "";
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 12px;
  height: 12px;
  border-radius: 50%;
  border: 2px solid #ccc;
}

input[type="radio"]:checked::before{
  background-color: #4caf50;
}

input[type="radio"]:focus::before{
  box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.3);
}

input[type="submit"]{
  display: inline-block;
  padding: 10px 20px;
  background-color: #4caf50;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  margin-right: 10px;
}

    </style>
  </head>
  <body>
    <h1>Setting</h1>
    <form method="post" action="setting.php">
      <h2>Setting Input</h2>
      <label>Alamat Mahasiswa wajib diisi?</label><br>
      <input type="radio" name="alamat_wajib" value="ya" <?php if(isset($_COOKIE['alamat_wajib']) && $_COOKIE['alamat_wajib'] == 'ya') echo 'checked'; ?>>Ya<br>
      <input type="radio" name="alamat_wajib" value="tidak" <?php if(isset($_COOKIE['alamat_wajib']) && $_COOKIE['alamat_wajib'] == 'tidak') echo 'checked'; ?>>Tidak<br>
      <br>
      <label>Masukan nilai default dari IPK mahasiswa?</label><br>
      <input type="text" name="ipk_default" value="<?php if(isset($_COOKIE['ipk_default'])) echo $_COOKIE['ipk_default']; ?>"><br>
      <br>
      <h2>Setting Display</h2>
      <label>Ukuran font:</label><br>
      <input type="text" name="ukuran_font" value="<?php if(isset($_COOKIE['ukuran_font'])) echo $_COOKIE['ukuran_font']; ?>"><br>
      <br>
      <label>Tampilan font:</label><br>
      <select name="tampilan_font">
        <option value="bold" <?php if(isset($_COOKIE['tampilan_font']) && $_COOKIE['tampilan_font'] == 'bold') echo 'selected'; ?>>Bold</option>
        <option value="italic" <?php if(isset($_COOKIE['tampilan_font']) && $_COOKIE['tampilan_font'] == 'italic') echo 'selected'; ?>>Italic</option>
        <option value="underline" <?php if(isset($_COOKIE['tampilan_font']) && $_COOKIE['tampilan_font'] == 'underline') echo 'selected'; ?>>Underline</option>
      </select><br>
      <br>
      <label>Tampilkan alamat mahasiswa?</label><br>
      <input type="radio" name="alamat_display" value="ya" <?php if(isset($_COOKIE['alamat_display']) && $_COOKIE['alamat_display'] == 'ya') echo 'checked'; ?>>Ya<br>
      <input type="radio" name="alamat_display" value="tidak" <?php if(isset($_COOKIE['alamat_display']) && $_COOKIE['alamat_display'] == 'tidak') echo 'checked'; ?>>Tidak<br>
      <br>
      <label>IPK Mahasiswa apakah akan ditampilkan?</label><br>
      <input type="radio" name="ipk_display" value="ya" <?php if(isset($_COOKIE['ipk_display']) && $_COOKIE['ipk_display'] == 'ya') echo 'checked'; ?>>Ya<br>
      <input type="radio" name="ipk_display" value="tidak" <?php if(isset($_COOKIE['ipk_display']) && $_COOKIE['ipk_display'] == 'tidak') echo 'checked'; ?>>Tidak<br>
      <br>
      <input type="submit" name="submit" value="Simpan">
    </form>
  </body>
</html>