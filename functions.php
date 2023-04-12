<?php

// include file
function css($nama_file)
{
    echo "
    <head>
    <link rel='stylesheet' type='text/css' href='css/$nama_file.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css'>
    </head>
    ";
}


?>