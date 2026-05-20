<?php

include '../config/koneksi.php';
include '../template/header.php';

if($_SESSION['role'] != 'admin'){

    header("location:../auth/login.php");
}

if(isset($_GET['bayar'])){

    $id = $_GET['bayar'];

    mysqli_query($conn,"
    UPDATE pendaftaran
    SET pembayaran='Sudah Bayar'
    WHERE id='$id'
    ");
}

$data = mysqli_query(
$conn,
"SELECT * FROM pendaftaran
WHERE status_berkas='Lulus'"
);

?>

<div class="card">

<h2>Daftar Ulang & Pembayaran</h2>

<table id="myTable" class="display">

<thead>
<tr>
<th>No</th>
<th>Nama</th>
<th>Jurusan</th>
<th>Pembayaran</th>
<th>Aksi</th>
</tr>
</thead>

<tbody>

<?php
$no = 1;

while($d = mysqli_fetch_array($data)){
?>

<tr>
<td><?= $no++; ?></td>
<td><?= $d['nama']; ?></td>
<td><?= $d['jurusan']; ?></td>
<td><?= $d['pembayaran']; ?></td>
<td>
<a href="?bayar=<?= $d['id']; ?>">Konfirmasi</a>
</td>
</tr>

<?php } ?>

</tbody>

</table>

</div>

<a href="dashboard.php"
class="back-btn">

← Kembali ke Dashboard

</a>

<?php include '../template/footer.php'; ?>