<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebProg A - Week 5</title>
</head>

<body>
    <form method="POST" action="index_proses.php">
        User : <input type="text" name="user" required placeholder="Masukan Username" autofocus><br>
        Pass : <input type="password" name="pass" required placeholder="Masukan password"><br>
        Email : <input type="email" name="email" required placeholder="Masukan Email"><br>
        Date : <input type="date" name="date"><br>
        Gender :
        <input type="radio" name="gender" value="Male" checked>Male
        <input type="radio" name="gender" value="Female">Female
        <br>
        Keterangan : <textarea name="Keterangan">abc</textarea><br>
        <select name="ukuran">
            <option value="S">Small</option>
            <option value="M" selected>Medium</option>
            <option value="L">Large</option>
            <option value="XL">Extra Large</option>
        </select><br>
        <input type="submit" name="submit" value="login">
    </form>
</body>

</html>