<?php
session_start();

include('../model/functions.php');
tambahData($_POST);
header('location: ../kanan.php');
$_SESSION['pesan_sukses'] = "Data Berhasil Ditambahkan!";

?>