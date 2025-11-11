<?php
include "konek.php";

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$nisn = $_POST['NISN'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"insert into form values('$kode', '$nama', '$nisn', '$jurusan', '$alamat')");
header("location:tampil.php");

?>