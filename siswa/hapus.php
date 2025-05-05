<?php
include 'koneksi.php';

// Redirect ke halaman login jika belum login
if (!isset($_SESSION['logged_in'])) {
    header('Location: auth/login.php');
    exit;
}

// menangkap data id yang di kirim dari url
$id = mysqli_real_escape_string($koneksi, $_GET['id']);

// menghapus data dari database
$query = "DELETE FROM tb_siswa WHERE id='$id'";
if (mysqli_query($koneksi, $query)) {
    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
} else {
    die("Error: " . mysqli_error($koneksi));
}
?>