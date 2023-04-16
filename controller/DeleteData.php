<?php
session_start();

include('../model/functions.php');
hapusData($_GET['nbi']);
header('location: ../views/kanan.php');
$_SESSION['pesan'] = [
    "msg" => "Data dengan NBI " . $_GET['nbi'] . " Berhasil Di Hapus!",
    "notif" => "success",
];
?>