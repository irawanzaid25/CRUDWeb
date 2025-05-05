<?php
include 'koneksi.php';

// Redirect ke halaman login jika belum login
if (!isset($_SESSION['logged_in'])) {
    header('Location: auth/login.php');
    exit;
}

// menangkap data yang di kirim dari form
$id = mysqli_real_escape_string($koneksi, $_POST['id']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$nis = mysqli_real_escape_string($koneksi, $_POST['nis']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);

// update data ke database
$query = "UPDATE tb_siswa SET nama='$nama', nis='$nis', alamat='$alamat' WHERE id='$id'";
if (mysqli_query($koneksi, $query)) {
    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
} else {
    die("Error: " . mysqli_error($koneksi));
}
?>