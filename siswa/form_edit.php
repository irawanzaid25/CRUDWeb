<?php
include 'koneksi.php';

// Redirect ke halaman login jika belum login
if (!isset($_SESSION['logged_in'])) {
    header('Location: auth/login.php');
    exit;
}

$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from tb_siswa where id='$id'");
$d = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
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
    <h2>CRUD DATA SISWA</h2>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/>
    <br/>
    <h3>EDIT DATA SISWA</h3>
    <form method="post" action="proses_edit.php">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" name="nama" value="<?php echo $d['nama']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>NIS</td>
                <td><input type="number" name="nis" value="<?php echo $d['nis']; ?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>