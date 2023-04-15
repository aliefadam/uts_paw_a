<?php
include('../model/functions.php');
css('tambah-data');
?>

<h1>Hapus Data</h1>

<form action="../controller/HapusData.php" method="post">
    <label for="nbi">Masukkan Nbi Mahasiswa</label>
    <input type="text" name="nbi" required>
    <button type="submit" class="btn">Cari</button>
</form>