<?php
include('../model/functions.php');
css('delete-data');

$mhs = tampilDenganNbi($_GET['nbi']);
?>

<h1>Hapus Data</h1>

<h4>NBI</h4>
<p>
    <?= $mhs['nbi'] ?>
</p>

<h4>Nama</h4>
<p>
    <?= $mhs['nama'] ?>
</p>

<h4>Alamat</h4>
<p>
    <?= $mhs['alamat'] ?>
</p>

<h4>No Handphone</h4>
<p>
    <?= $mhs['no_hp'] ?>
</p>

<p>Apakah anda yakin ingin menghapus data ini ?</p>
<a class="btn btn-ya" href="../controller/DeleteData.php?nbi=<?= $mhs['nbi'] ?>">Ya</a>
<a class="btn btn-tidak" href="kanan.php">Tidak</a>