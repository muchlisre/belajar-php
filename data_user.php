<?php
include "koneksi.php";
$data = $koneksi->query("select * from table_user");
?>

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
            <a href="user.php" class="btn btn-primary">Tambah User</a>
<table class="table table-bordered table-striped" >
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nomor HP</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
    <?php
    if($data->num_rows > 0){
        while($baris = $data->fetch_assoc()){
            ?>
        <tr>
            <td><?php echo $baris['id']; ?></td>
            <td><?php echo $baris['nama']; ?></td>
            <td><?php echo $baris['nomor_hp']; ?></td>
            <td><?php echo $baris['email']; ?></td>
        </tr>

    <?php
        }
    }
    ?>
    </tbody>
</table>

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
