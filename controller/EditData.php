<?php
session_start();

include('../model/functions.php');
updateData($_POST);
header('location: ../kanan.php');
$_SESSION['pesan_sukses'] = "Data dengan Nbi " . $_POST['nbi'] . " Berhasil Di Update!";
?>