<?php
session_start();

include('../model/functions.php');
hapusData($_GET['nbi']);
header('location: ../kanan.php');
$_SESSION['pesan_sukses'] = "Data dengan NBI " . $_GET['nbi'] . " Berhasil Di Hapus!";

?>