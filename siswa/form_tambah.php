<?php 
include 'koneksi.php';

// Redirect ke halaman login jika belum login
if (!isset($_SESSION['logged_in'])) {
    header('Location: auth/login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title> CRUD Data Siswa SMK </title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h3 { color: #333; }
        table { margin-top: 20px; }
        input[type="text"], input[type="number"] { padding: 8px; width: 300px; }
        input[type="submit"] { padding: 8px 16px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        input[type="submit"]:hover { background-color: #45a049; }
    </style>
</head>
<body>
    <a href="index.php">KEMBALI</a>
    <br/>
    <br/>
    <h3>TAMBAH DATA SISWA</h3>
    <form method="post" action="proses_tambah.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td><input type="number" name="nis" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>