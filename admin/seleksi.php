<?php

include '../config/koneksi.php';
include '../template/header.php';

if($_SESSION['role'] != 'admin'){

    header("location:../auth/login.php");
}

if(isset($_GET['lulus'])){

    $id = $_GET['lulus'];

    mysqli_query($conn,"
    UPDATE pendaftaran
    SET status_berkas='Lulus'
    WHERE id='$id'
    ");
}

if(isset($_GET['tidak'])){

    $id = $_GET['tidak'];

    mysqli_query($conn,"
    UPDATE pendaftaran
    SET status_berkas='Tidak Lulus'
    WHERE id='$id'
    ");
}

$data = mysqli_query(
$conn,
"SELECT * FROM pendaftaran"
);

?>

<div class="card">

<h2>Seleksi Berkas</h2>

<table id="myTable" class="display">

<thead>
<tr>
<th>No</th>
<th>Nama</th>
<th>Email</th>
<th>Jurusan</th>
<th>Status</th>
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
<td><?= $d['email']; ?></td>
<td><?= $d['jurusan']; ?></td>
<td><?= $d['status_berkas']; ?></td>
<td>
<a href="?lulus=<?= $d['id']; ?>">Lulus</a>
|
<a href="?tidak=<?= $d['id']; ?>">Tidak Lulus</a>
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