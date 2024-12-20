<?php
include "koneksi.php";
$data = $koneksi->query("select * from table_user");
?>

<table border="1">
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


