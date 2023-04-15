<?php
include('../model/functions.php');
css('edit-data');

$mhs = tampilDenganNbi($_GET['nbi']);
?>

<h1>Update Data</h1>

<form action="../controller/EditData.php" method="post">
    <label for="nbi">Nbi</label>
    <input type="text" name="nbi" value="<?= $mhs['nbi'] ?>" readonly="true">
    <label for="nama">Nama</label>
    <input type="text" name="nama" value="<?= $mhs['nama'] ?>">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" value="<?= $mhs['alamat'] ?>">
    <label for=" no-hp">No Handphone</label>
    <input type="text" name="no-hp" value="<?= $mhs['no_hp'] ?>">
    <button type=" submit" name="tambah" class="btn">Update</button>
</form>