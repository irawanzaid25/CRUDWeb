<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Cek apakah username sudah ada
    $check_query = "SELECT * FROM users WHERE username = '$username'";
    $check_result = mysqli_query($koneksi, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        header('Location: signup.php?error=1');
        exit;
    }

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($koneksi, $query)) {
        $_SESSION['user_id'] = mysqli_insert_id($koneksi);
        $_SESSION['username'] = $username;
        $_SESSION['logged_in'] = true;
        header('Location: ../index.php');
        exit;
    } else {
        die("Error: " . mysqli_error($koneksi));
    }
}
?>