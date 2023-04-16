<?php
session_start();

include('../model/functions.php');
if (tambahData($_POST)) {
    header('location: ../views/kanan.php');
    $_SESSION['pesan'] = [
        "msg" => "Data Berhasil Ditambahkan!",
        "notif" => "success",
    ];
} else {
    header('location: ../views/kanan.php');
    $_SESSION['pesan'] = [
        "msg" => "Data Gagal ditambahkan! nbi " . $_POST['nbi'] . " sudah terdaftar!",
        "notif" => "error",
    ];
}


?>