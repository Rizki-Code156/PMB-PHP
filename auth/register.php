<?php

include '../config/koneksi.php';

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_query($conn,"
    INSERT INTO users
    VALUES(
        '',
        '$username',
        '$password',
        'mahasiswa'
    )
    ");

    echo "
    <script>

    alert('Register berhasil');

    window.location='login.php';

    </script>
    ";
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Register</title>

<link rel="stylesheet"
href="../assets/css/style.css">

</head>
<body>

<div class="navbar">

<div class="logo">
PMB 2026
</div>

<div class="menu">

<a href="../index.php">
Beranda
</a>

<a href="login.php">
Login
</a>

</div>

</div>

<div class="login-container">

<div class="login-box">

<h2>REGISTER</h2>

<form method="POST">

<p>Username</p>

<input type="text"
name="username"
required>

<p>Password</p>

<input type="password"
name="password"
required>

<br>

<button type="submit"
name="register">

Register

</button>

</form>

<br>

<p>
Sudah punya akun?
<a href="login.php">
Login
</a>
</p>

</div>

</div>

</body>
</html>