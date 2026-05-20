<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

<title>PMB Kampus</title>

<link rel="stylesheet"
href="assets/css/style.css">

</head>
<body>

<!-- NAVBAR -->

<div class="navbar">

<div class="logo">
PMB 2026
</div>

<div class="menu">

<a href="index.php">
Beranda
</a>

<?php if(isset($_SESSION['role'])){ ?>

    <?php if($_SESSION['role'] == 'admin'){ ?>

        <a href="admin/dashboard.php">
        Dashboard
        </a>

    <?php } else { ?>

        <a href="mahasiswa/dashboard.php">
        Dashboard
        </a>

    <?php } ?>

    <a href="auth/logout.php"
onclick="return confirm('Yakin ingin logout?')">
Logout
</a>

<?php } else { ?>

    <a href="auth/login.php">
    Login
    </a>

    <a href="auth/register.php">
    Register
    </a>

<?php } ?>

</div>

</div>

<!-- HERO -->

<div class="hero">

<div>

<h1>PENERIMAAN MAHASISWA BARU</h1>

<p>
Sistem Pendaftaran Kampus 2026
</p>

</div>

</div>

<!-- CONTENT -->

<div class="container">

<div class="card">

<h2>Alur Pendaftaran</h2>

<ol>

<li>Pendaftaran Online</li>

<li>Seleksi Berkas</li>

<li>Pengumuman Hasil</li>

<li>Daftar Ulang</li>

<li>OSPEK Mahasiswa Baru</li>

</ol>

</div>

</div>

<div class="footer">

<h3>PMB Kampus</h3>

<p>2026 © Sistem PMB</p>

</div>

</body>
</html>