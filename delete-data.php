<?php
include('model/functions.php');
css('edit-data');

$mhs = tampilDenganNbi($_GET['nbi']);
?>

<ul>
    <li>NBI =
        <?= $mhs['nbi'] ?>
    </li>
    <li>Nama =
        <?= $mhs['nama'] ?>
    </li>
    <li>
        Alamat =
        <?= $mhs['alamat'] ?>
    </li>
    <li>
        No Handphone =
        <?= $mhs['no_hp'] ?>
    </li>
</ul>

<p>Apakah anda yakin ingin menghapus data ini ?</p>
<a class="btn btn-success" href="controller/DeleteData.php?nbi=<?= $mhs['nbi'] ?>">Ya</a>
<a class="btn btn-danger" href="kanan.php">Tidak</a>