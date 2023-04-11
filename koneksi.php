<?php

$conn = mysqli_connect("localhost", "root", "", "uts_paw_a");
// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi Gagal :  " . mysqli_connect_error();
    exit();
}

?>