<?php

include('functions.php');

if (isset($_POST['tambah'])) {
    if (tambahData($_POST)) {
        header('location: index.php');
    }
}

?>