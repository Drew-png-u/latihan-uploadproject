<?php

$koneksi = mysqli_connect("localhost", "root", "mysql", "tugas");
echo "Koneksi Berhasil";
if(mysqli_connect_error()){
    echo "koneksinya gagal : " .  mysqli_connect_error();
}

?>