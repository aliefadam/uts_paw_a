<?php
session_start();

include('../model/functions.php');
if (nbiKetemu($_POST)) {
    $nbi = $_POST['nbi'];
    header("location: ../views/edit-data.php?nbi=$nbi");
} else {
    header("location: ../views/kanan.php");
    $_SESSION['pesan'] = [
        "msg" => "Data dengan nbi " . $_POST['nbi'] . " tidak ditemukan!",
        "notif" => "error",
    ];
}

?>