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
    <title>CRUD Data Siswa SMK</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h2 { color: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 12px; text-align: left; }
        th { background-color: #f2f2f2; }
        a { text-decoration: none; color: #4CAF50; margin-right: 10px; }
        a:hover { text-decoration: underline; }
        .action-buttons { display: flex; justify-content: space-between; }
        .logout-btn { background-color: #f44336; color: white; padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer; }
        .logout-btn:hover { background-color: #d32f2f; }
    </style>
</head>
<body>
    <div class="action-buttons">
        <h2>Data Siswa SMK N 1 Wonosobo</h2>
        <div>
            <span>Selamat datang, <?php echo $_SESSION['username']; ?></span>
            <a href="auth/logout.php" class="logout-btn">Logout</a>
        </div>
    </div>
    <br/>
    <a href="form_tambah.php"> + TAMBAH SISWA</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Alamat</th>
            <th>OPSI</th>
        </tr>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi,"select * from tb_siswa");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['nis']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td>
                <a href="form_edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                <a href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin ingin menghapus?')">HAPUS</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>