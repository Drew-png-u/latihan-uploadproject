<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="input.css">
</head>
<body>
    <h1> FORM MAHASISWA </h1>
    <br>
    <div class="kembali-link">
        <a href="tampil.php"> Kembali </a>
    </div>
    <br>
    <br>
    <h3> TAMBAH DATA SISWA </h3>
    <form action="input_aksi.php" method="post">
        <table>
            <tr>
                <td> Kode Mahasiswa </td>
                <td><input type="text" name="kode"></td>
            </tr>

            <tr>
                <td> Nama Mahasiswa </td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
                <td> NISN </td>
                <td><input type="number" name="NISN"></td>
            </tr>

            <tr>
                <td> Jurusan </td>
                <td><input type="text" name="jurusan"></td>
            </tr>

            <tr>
                <td> Alamat </td>
                <td><input type="text" name="alamat"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>