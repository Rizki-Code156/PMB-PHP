<?php

include '../config/koneksi.php';

if($_SESSION['role'] != 'mahasiswa'){
    header("location:../auth/login.php");
}

include '../template/header.php';

$sukses = false;

if(isset($_POST['daftar'])){

    $user_id = $_SESSION['id'];

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];

    mysqli_query($conn,"
    INSERT INTO pendaftaran
    VALUES(
        '',
        '$user_id',
        '$nama',
        '$email',
        '$jurusan',
        'Pending',
        'Belum Bayar',
        'Belum'
    )
    ");

    $sukses = true;
}

?>

<div class="container">

<div class="card">

<h2>Pendaftaran Mahasiswa</h2>

<?php if($sukses){ ?>

<div class="alert-success">
✅ Pendaftaran berhasil dilakukan!
</div>

<?php } ?>

<form method="POST">

<p>Nama Lengkap</p>
<input type="text" name="nama" required>

<p>Email</p>
<input type="email" name="email" required>

<p>Jurusan</p>
<input type="text" name="jurusan" required>

<br>

<button type="submit"
name="daftar"
class="btn">

Daftar Sekarang

</button>

</form>

</div>

</div>

<a href="dashboard.php"
class="back-btn">

← Kembali ke Dashboard

</a>

<?php include '../template/footer.php'; ?>