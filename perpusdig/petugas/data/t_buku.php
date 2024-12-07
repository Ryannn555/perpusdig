<?php
    // koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$judul      = $_POST['judul'];
$penulis    = $_POST['penulis'];
$penerbit   = $_POST['penerbit'];
$tahunterbit= $_POST['tahunterbit'];
$foto       = $_FILES['foto']['name'];
$file       = $_FILES['foto']['tmp_name'];

// menginput data ke database
move_uploaded_file($file, '../assets/sampul/' .$foto);
mysqli_query($koneksi,"INSERT into buku (judul, penulis, penerbit, tahunterbit, foto)
                                    values('$judul','$penulis', '$penerbit', '$tahunterbit', '$foto') ");
 
// mengalihkan halaman kembali ke index.php
header("location:../buku.php");
?>