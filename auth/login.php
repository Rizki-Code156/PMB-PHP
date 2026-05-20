<?php

include '../config/koneksi.php';

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($conn,"
    SELECT * FROM users
    WHERE username='$username'
    AND password='$password'
    ");

    $cek = mysqli_num_rows($data);

    if($cek > 0){

        $d = mysqli_fetch_array($data);

        $_SESSION['id'] = $d['id'];
        $_SESSION['role'] = $d['role'];

        if($d['role'] == 'admin'){

    echo "
    <script>

    alert('Login Admin berhasil');

    window.location='../admin/dashboard.php';

    </script>
    ";

}else{

    echo "
    <script>

    alert('Login berhasil');

    window.location='../mahasiswa/dashboard.php';

    </script>
    ";

}

    }else{

        echo "<script>
        alert('Login gagal');
        </script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Login</title>

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

<a href="register.php">
Register
</a>

</div>

</div>

<div class="login-container">

<div class="login-box">

<h2>LOGIN</h2>

<?php
if(isset($_GET['success'])){
?>

<div class="alert-success">
✅ Registrasi berhasil, silakan login.
</div>

<?php } ?>

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
name="login">

Login

</button>

</form>

<br>

<p>
Belum punya akun?
<a href="register.php">
Register
</a>
</p>

</div>

</div>

</body>
</html>