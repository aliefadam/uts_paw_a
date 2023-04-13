<?php
include('model/functions.php');
css('edit-data');

$mhs = tampilDenganNbi($_GET['nbi']);
?>

<form action="controller/EditData.php" method="post">
    <label for="nbi">Nbi</label>
    <input type="text" name="nbi" class="form-control" value="<?= $mhs['nbi'] ?>" readonly="true">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" value="<?= $mhs['nama'] ?>">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" class="form-control" value="<?= $mhs['alamat'] ?>">
    <label for=" no-hp">No Handphone</label>
    <input type="text" name="no-hp" class="form-control" value="<?= $mhs['no_hp'] ?>">
    <button type=" submit" name="tambah" class="btn btn-success mt-3">Update</button>
</form>