<?php
include('model/functions.php');
css('tambah-data');
?>

<form action="controller/TambahData.php" method="post">
    <label for="nbi">Nbi</label>
    <input type="text" name="nbi" class="form-control">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" class="form-control">
    <label for="no-hp">No Handphone</label>
    <input type="text" name="no-hp" class="form-control">
    <button type="submit" name="tambah" class="btn btn-success mt-3">Tambah!</button>
</form>