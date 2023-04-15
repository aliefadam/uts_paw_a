<?php
include('../model/functions.php');
css('tambah-data');
?>

<h1>UPDATE DATA</h1>

<form action="../controller/UpdateData.php" method="post">
    <label for="nbi">Masukkan NBI Mahasiswa</label>
    <input type="text" name="nbi" required>
    <button type="submit" class="btn">Cari</button>
</form>