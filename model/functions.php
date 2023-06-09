<?php
include('koneksi.php');

function css($nama_file)
{
    echo "
    <head>
        <link rel='stylesheet' type='text/css' href='../css/$nama_file.css'>
        <link rel='stylesheet' href='../css/bootstrap.min.css'>
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700&display=swap' rel='stylesheet'>
    </head>
    ";
}

function pesan()
{
    if (isset($_SESSION['pesan'])) {

        $pesan = $_SESSION['pesan'];
        $_SESSION = [];
        return $pesan;
    }

}

function tambahData($data)
{
    global $conn;

    $nbi = $data['nbi'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $no_hp = $data['no-hp'];

    if (nbiKetemu($data)) {
        return false;
    }

    $query = "INSERT INTO mahasiswa VALUES(?,?,?,?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $nbi, $nama, $alamat, $no_hp);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return true;
}

function tampilData()
{
    global $conn;

    $query = "SELECT * FROM mahasiswa";
    $rs = mysqli_query($conn, $query);
    if (mysqli_num_rows($rs) > 0) {
        while ($rows = mysqli_fetch_assoc($rs)) {
            $row[] = $rows;
        }
        return $row;
    }

}

function nbiKetemu($data)
{
    global $conn;

    $nbi = $data['nbi'];
    $query = "SELECT * FROM mahasiswa WHERE nbi='$nbi'";
    $rs = mysqli_query($conn, $query);
    if (mysqli_num_rows($rs) > 0) {
        return true;
    }
    return false;
}

function tampilDenganNbi($nbi)
{
    global $conn;

    $query = "SELECT * FROM mahasiswa WHERE nbi='$nbi'";
    $rs = mysqli_query($conn, $query);
    if (mysqli_num_rows($rs) > 0) {
        $rows = mysqli_fetch_assoc($rs);
    }
    return $rows;
}

function updateData($data)
{
    global $conn;

    $nbi = $data['nbi'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $no_hp = $data['no-hp'];

    $query = "UPDATE mahasiswa SET nama=?, alamat=?, no_hp=? WHERE nbi=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $nama, $alamat, $no_hp, $nbi);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

function hapusData($nbi)
{
    global $conn;

    $query = "DELETE FROM mahasiswa WHERE nbi='$nbi'";
    mysqli_query($conn, $query);
}


?>