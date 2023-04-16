<?php
session_start();

include('../model/functions.php');
updateData($_POST);
header('location: ../views/kanan.php');
$_SESSION['pesan'] = [
    "msg" => "Data dengan Nbi " . $_POST['nbi'] . " Berhasil Di Update!",
    "notif" => "success",
];
?>