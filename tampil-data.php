<?php
include('model/functions.php');
css('tampil-data');
$data_mahasiswa = tampilData();
?>

<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <td>NBI</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>No Handphone</td>
        </tr>
        <?php foreach ($data_mahasiswa as $mhs): ?>
            <tr>
                <td>
                    <?= $mhs['nbi'] ?>
                </td>
                <td>
                    <?= $mhs['nama'] ?>
                </td>
                <td>
                    <?= $mhs['alamat'] ?>
                </td>
                <td>
                    <?= $mhs['no_hp'] ?>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>