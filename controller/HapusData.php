<?php
session_start();

include('../model/functions.php');
if (nbiKetemu($_POST)) {
    $nbi = $_POST['nbi'];
    header("location: ../views/delete-data.php?nbi=$nbi");
} else {
    header("location: ../views/kanan.php");
    $_SESSION['pesan'] = "Data dengan nbi " . $_POST['nbi'] . " tidak ditemukan!";
}

?>