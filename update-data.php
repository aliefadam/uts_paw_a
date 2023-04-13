<?php
include('model/functions.php');
css('tambah-data');
?>

<form action="controller/UpdateData.php" method="post">
    <label for="nbi">Masukkan Nbi Mahasiswa</label>
    <input type="text" name="nbi" class="form-control">
    <button type="submit" class="btn btn-success mt-3">Go</button>
</form>