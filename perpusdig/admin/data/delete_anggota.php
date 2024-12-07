<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['iduser'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from user where IDuser='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../anggota.php");
 
?>