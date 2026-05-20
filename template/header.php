<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Sistem PMB</title>

<link rel="stylesheet"
href="../assets/css/style.css">

<link rel="stylesheet"
href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

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

<?php if(isset($_SESSION['role'])){ ?>

    <?php if($_SESSION['role'] == 'admin'){ ?>

        <a href="../admin/dashboard.php">
        Dashboard
        </a>

    <?php } else { ?>

        <a href="../mahasiswa/dashboard.php">
        Dashboard
        </a>

    <?php } ?>

    <a href="../auth/logout.php"
onclick="return confirm('Yakin ingin logout?')">
Logout
</a>

<?php } else { ?>

    <a href="../auth/login.php">
    Login
    </a>

    <a href="../auth/register.php">
    Register
    </a>

<?php } ?>

</div>

</div>