<?php

include '../config/koneksi.php';

if($_SESSION['role'] != 'admin'){

    header("location:../auth/login.php");
}

include '../template/header.php';

?>

<div class="container">

<h1 class="dashboard-title">
Dashboard Admin
</h1>

<div class="menu-grid">

<div class="menu-card">

<h3>Seleksi Berkas</h3>

<p>
Kelola hasil seleksi mahasiswa.
</p>

<a href="seleksi.php">
Buka
</a>

</div>

<div class="menu-card">

<h3>Daftar Ulang</h3>

<p>
Konfirmasi pembayaran mahasiswa.
</p>

<a href="daftar_ulang.php">
Buka
</a>

</div>

<div class="menu-card">

<h3>OSPEK</h3>

<p>
Kelola kehadiran OSPEK mahasiswa.
</p>

<a href="ospek.php">
Buka
</a>

</div>


</div>

</div>

<?php include '../template/footer.php'; ?>