<?php
include('../model/functions.php');
if (nbiKetemu($_POST)) {
    $nbi = $_POST['nbi'];
    header("location: ../delete-data.php?nbi=$nbi");
} else {
    echo "GAONO SUU";
}

?>