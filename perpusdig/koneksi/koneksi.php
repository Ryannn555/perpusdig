<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "perpusdig";

    $koneksi = mysqli_connect($host, $user, $pass, $db);

    if (!$koneksi) {
        die("koneksi Gagal: " . mysqli_connect_error());
    }
    //echo "koneksi Berhasil"
?>