<?php
include('../model/functions.php');
css('tampil-data');
$data_mahasiswa = tampilData();
?>

<h1>Tampil Data</h1>

<div class="table-responsive mt-4">
    <table class="table">
        <tr>
            <th>NBI</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Handphone</th>
        </tr>
        <?php if (!empty($data_mahasiswa)): ?>
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
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</div>