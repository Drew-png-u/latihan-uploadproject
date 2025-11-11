<?php
include "konek.php";

$kode = $_POST['kode_mahasiswa'];
$kode_lama = $_POST['kode_mahasiswa_lama'];
$nama = $_POST['nama'];
$nisn = $_POST['NISN'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "update form set kode_mahasiswa='$kode', nama_mahasiswa='$nama', NISN='$nisn', jurusan='$jurusan', alamat='$alamat' where kode_mahasiswa='$kode_lama'");

header("location:tampil.php");

?>