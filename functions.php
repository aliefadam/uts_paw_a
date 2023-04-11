<?php

include('koneksi.php');

function tambahData($data)
{
    // ambil data dari method post
    $nbi = $data['nbi'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $no_telp = $data['no-telp'];

    // panggil variabel $conn dari file koneksi.php
    global $conn;

    // proses tambah data
    $query = "INSERT INTO mahasiswa VALUES(?,?,?,?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $nbi, $nama, $alamat, $no_telp);
    $exe = mysqli_stmt_execute($stmt);
    mysqli_close($conn);
    return $exe;
}

function showData()
{
    // panggil variabel $conn dari file koneksi.php
    global $conn;

    // proses ambil data dari database
    $query = "SELECT * FROM mahasiswa";
    $stmt = mysqli_prepare($conn, $query);
    $exe = mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    while ($rows = mysqli_fetch_assoc($result)) {
        $data[] = $rows;
    }
    mysqli_close($conn);
    return $data;
}


?>