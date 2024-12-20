<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container">
    <h4>Form User</h4>
    <div class="row">
        <div class="col">
        <form action="simpan_user.php" method="post">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="nama" name="nama" type="text" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nomor_hp" class="col-4 col-form-label">Nomor HP</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-whatsapp"></i>
                    </div>
                    </div> 
                    <input id="nomor_hp" name="telp" type="tel" required="required" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-at"></i>
                    </div>
                    </div> 
                    <input id="email" name="email" type="email" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-4 col-form-label">Password</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-key"></i>
                    </div>
                    </div> 
                    <input id="password" name="pass" type="password" class="form-control">
                </div>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                <a href="data_user.php" type="reset" class="btn btn-warning">Batal</a>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<?php
if(isset($_GET['s'])){
    if($_GET['s']=='berhasil'){
        echo "<script>alert('Data berhasil disimpan!');</script>";
    }elseif($_GET['s']=='gagal'){
        echo "<script>alert('Data gagal disimpan!');</script>";
    }
}

?>


</body>
</html>

