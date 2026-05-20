<?php

include '../config/koneksi.php';
include '../template/header.php';

if($_SESSION['role'] != 'admin'){

    header("location:../auth/login.php");
}

if(isset($_GET['hadir'])){

    $id = $_GET['hadir'];

    mysqli_query($conn,"
    UPDATE pendaftaran
    SET ospek='Sudah'
    WHERE id='$id'
    ");
}

$data = mysqli_query(
$conn,
"SELECT * FROM pendaftaran
WHERE pembayaran='Sudah Bayar'"
);

?>

<div class="card">

<h2>OSPEK Mahasiswa Baru</h2>

<table id="myTable" class="display">

<thead>
<tr>
<th>No</th>
<th>Nama</th>
<th>Jurusan</th>
<th>Status OSPEK</th>
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
<td><?= $d['ospek']; ?></td>
<td>
<a href="?hadir=<?= $d['id']; ?>">Tandai Hadir</a>
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