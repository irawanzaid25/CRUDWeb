<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_siswasmk";  // Diubah dari db_siswa menjadi db_siswasmk

$koneksi = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

session_start();
?>