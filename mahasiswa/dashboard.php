<?php

include '../config/koneksi.php';

if($_SESSION['role'] != 'mahasiswa'){

    header("location:../auth/login.php");
}

include '../template/header.php';

?>

<div class="container">

<h1 class="dashboard-title">
Dashboard Mahasiswa
</h1>

<div class="menu-grid">

<div class="menu-card">

<h3>Pendaftaran</h3>

<p>
Isi formulir pendaftaran mahasiswa baru.
</p>

<a href="daftar.php">
Masuk
</a>

</div>

<div class="menu-card">

<h3>Pengumuman</h3>

<p>
Lihat hasil seleksi dan status akun.
</p>

<a href="pengumuman.php">
Lihat
</a>

</div>

</div>

</div>

<?php include '../template/footer.php'; ?>