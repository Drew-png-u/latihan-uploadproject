<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="apdet.css">
</head>
<body>

    <h2> Data Mahasiswa </h2>
    <br>
    <div class="kembali-link">
        <a href="tampil.php"> Kembali </a>
    </div>
    <br>
    <br>
    <h3> Edit Data Mahasiswa </h3>

    <?php
    include "konek.php";
    $kode = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from form where kode_mahasiswa='$kode'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form action="uba.php" method="post">
            <table>
                <tr>
                    <td> Kode Mahasiswa </td>
                    <td>
                        <input type="text" name="kode_mahasiswa" value="<?php echo $d['kode_mahasiswa']; ?>">
                        <input type="hidden" name="kode_mahasiswa_lama" value="<?php echo $d['kode_mahasiswa']; ?>">
                    </td>
                    
                </tr>

                <tr>
                    <td> Nama </td>
                    <td><input type="text" name="nama" value="<?php echo $d['nama_mahasiswa']; ?>"></td>
                </tr>

                <tr>
                    <td> NISN </td>
                    <td><input type="number" name="NISN" value="<?php echo $d['NISN']; ?>"></td>
                </tr>

                <tr>
                    <td> Jurusan </td>
                    <td><input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"></td>
                </tr>

                <tr>
                    <td> Alamat </td>
                    <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                    <input type="hidden" name="kode_mahasiswa" value="<?php echo $d['kode_mahasiswa']; ?>">
                </tr>
            </table>
        </form>
        <?php
    }
    ?>
</body>
</html>