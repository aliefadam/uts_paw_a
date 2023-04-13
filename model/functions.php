<?php
include('koneksi.php');

function css($nama_file)
{
    echo "
    <head>
        <link rel='stylesheet' type='text/css' href='css/$nama_file.css'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css'>
    </head>
    ";
}

function pesanSukses()
{
    if (isset($_SESSION['pesan_sukses'])) {

        $pesan = $_SESSION['pesan_sukses'];
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

    $query = "INSERT INTO mahasiswa VALUES('$nbi','$nama','$alamat','$no_hp')";
    mysqli_query($conn, $query);
}

function tampilData()
{
    global $conn;

    $query = "SELECT * FROM mahasiswa";
    $rs = mysqli_query($conn, $query);
    while ($rows = mysqli_fetch_assoc($rs)) {
        $row[] = $rows;
    }
    return $row;
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

    $query = "UPDATE mahasiswa SET nama='$nama', alamat='$alamat', no_hp='$no_hp' WHERE nbi='$nbi'";
    mysqli_query($conn, $query);
}

function hapusData($nbi)
{
    global $conn;

    $query = "DELETE FROM mahasiswa WHERE nbi='$nbi'";
    mysqli_query($conn, $query);
}


?>