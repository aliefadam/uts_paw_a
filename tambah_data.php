<?php
include('atas.php'); ?>
<title>Tambah Data</title>
<link rel="stylesheet" href="css/tambah-data.css">
<?php
include('atas-2.php');
include('kiri.php');
?>

<main>
    <form action="ProsesTambahData.php" method="post">
        <label for="nbi">NBI</label>
        <input type="text" class="form-control" name="nbi">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" name="alamat">
        <label for="no-telp">No Handphone</label>
        <input type="text" class="form-control" name="no-telp">
        <button class="btn btn-success mt-3" name="tambah">Tambah</button>
    </form>
</main>

<?php
include('bawah.php');
?>