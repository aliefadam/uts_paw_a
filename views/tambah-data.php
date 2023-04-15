<?php
include('../model/functions.php');
css('tambah-data');
?>

<h1>Tambah Data</h1>

<form action="../controller/TambahData.php" method="post">
    <label for="nbi">NBI</label>
    <input required type="text" name="nbi" class="">
    <label for="nama">Nama</label>
    <input required type="text" name="nama" class="">
    <label for="alamat">Alamat</label>
    <input required type="text" name="alamat" class="">
    <label for="no-hp">No Handphone</label>
    <input required type="text" name="no-hp" class="">
    <button type="submit" name="tambah" class="btn">Tambah</button>
</form>