<?php
include('atas.php'); ?>
<title>Tampil Data</title>
<link rel="stylesheet" href="css/tampil-data.css">
<?php
include('atas-2.php');
include('kiri.php');
include('functions.php');

// memanggil fungsi showData dan menyimpan hasil fetch array ke variabel mahasiswa
$mahasiswa = showData();

?>

<main class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>NBI</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Handphone</th>
            </tr>
        </thead>

        <?php
        foreach ($mahasiswa as $mhs): ?>
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
                    <?= $mhs['no_telp'] ?>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</main>


<?php
include('bawah.php');
?>