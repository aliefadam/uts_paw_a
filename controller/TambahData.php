<?php
session_start();

include('../model/functions.php');
if (tambahData($_POST)) {
    header('location: ../views/kanan.php');
    $_SESSION['pesan'] = "Data Berhasil Ditambahkan!";
} else {
    header('location: ../views/kanan.php');
    $_SESSION['pesan'] = "Data Gagal ditambahkan! nbi " . $_POST['nbi'] . " sudah terdaftar!";
}


?>