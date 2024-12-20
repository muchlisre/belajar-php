<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP GET dan POST</title>
</head>
<body>
    Ini HTTP GET<br><hr>
    <form method="GET" action="">
        <label>Nama</label>
        <input type="text" name="telp" >
        <button type="submit">Simpan</button>
    </form>
<br>
    Ini HTTP POST<br><hr>
    <form method="POST" action="">
        <label>Nama</label>
        <input type="text" name="telp" >
        <button type="submit">Simpan</button>
    </form>
    <?php
    if(isset($_POST['telp'])){
        echo $_POST['telp'];
    }
    ?>
</body>
</html>