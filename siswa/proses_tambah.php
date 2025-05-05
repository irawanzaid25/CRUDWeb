<?php
include 'koneksi.php';

// Redirect ke halaman login jika belum login
if (!isset($_SESSION['logged_in'])) {
    header('Location: auth/login.php');
    exit;
}

// menangkap data yang di kirim dari form
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$nis = mysqli_real_escape_string($koneksi, $_POST['nis']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);

// menginput data ke database
$query = "INSERT INTO tb_siswa (nama, nis, alamat) VALUES ('$nama', '$nis', '$alamat')";
if (mysqli_query($koneksi, $query)) {
    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
} else {
    die("Error: " . mysqli_error($koneksi));
}
?>