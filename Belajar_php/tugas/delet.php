<?php
include 'konek.php';

$kode = $_GET['id'];
mysqli_query($koneksi,"delete from form where kode_mahasiswa='$kode'");

header("location:tampil.php");

?>