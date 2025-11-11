<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tampil.css">
</head>
<body>
    <div class="container">
        <h1> Hasil Data Pengisian Form </h1>
        <br>
        <div class="tambah-data-link">
            <a href="input.php"> Tambah Data </a>
        </div>
        <br>
        <br>
    </div>
    <table border="1">
        <tr>
            <th> KODE </th>
            <th> Nama </th>
            <th> NISN </th>
            <th> Jurusan </th>
            <th> Alamat </th>
            <th> OPSI </th>
        </tr>

        <?php
        include "konek.php";
        $data = mysqli_query($koneksi, "select * from form");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $d['kode_mahasiswa']?></td>
                <td><?php echo $d['nama_mahasiswa']?></td>
                <td><?php echo $d['NISN']?></td>
                <td><?php echo $d['jurusan']?></td>
                <td><?php echo $d['alamat']?></td>
                <td>
                    <a href="apdet.php?id=<?php echo $d['kode_mahasiswa']; ?>"> Update </a>
                    <a href="delet.php?id=<?php echo $d['kode_mahasiswa']; ?>"> Delete </a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>