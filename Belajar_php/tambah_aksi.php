<?php
//koneksi database
include "koneksi.php";

//menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$alamat = $_POST['alamat'];

//menginput data ke database
mysqli_query($koneksi, "insert into siswa(nama,nisn,alamat) values('$nama', '$nisn', '$alamat')");

//mengalihkan halaman kembali ke index.php
header("location:index.php");


?>