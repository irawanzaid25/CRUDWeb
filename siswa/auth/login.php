<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - CRUD Data Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; }
        .login-container { width: 300px; margin: 100px auto; padding: 20px; background: #fff; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; }
        input[type="text"], input[type="password"] { width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        input[type="submit"] { width: 100%; background-color: #4CAF50; color: white; padding: 14px 20px; margin: 8px 0; border: none; border-radius: 4px; cursor: pointer; }
        input[type="submit"]:hover { background-color: #45a049; }
        .error { color: red; }
        .signup-link { text-align: center; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])): ?>
            <p class="error">Username atau password salah!</p>
        <?php endif; ?>
        <form method="post" action="proses_login.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Login">
        </form>
        <div class="signup-link">
            Belum punya akun? <a href="signup.php">Daftar disini</a>
        </div>
    </div>
</body>
</html>