<?php

include '../config/koneksi.php';

if($_SESSION['role'] != 'mahasiswa'){
    header("location:../auth/login.php");
}

include '../template/header.php';

$id = $_SESSION['id'];

$data = mysqli_query($conn,"
SELECT * FROM pendaftaran
WHERE user_id='$id'
");

?>

<div class="container">

<div class="card">

<h2>Pengumuman Hasil</h2>

<div class="table-container">

<table id="myTable" class="display">

<thead>
<tr>
<th>No</th>
<th>Nama</th>
<th>Jurusan</th>
<th>Status</th>
<th>Pembayaran</th>
<th>OSPEK</th>
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
<td>
<?php
if($d['status_berkas'] == 'Pending'){
    echo "<span class='status-pending'>Pending</span>";
}
elseif($d['status_berkas'] == 'Lulus'){
    echo "<span class='status-lulus'>Lulus</span>";
}
else{
    echo "<span class='status-gagal'>Tidak Lulus</span>";
}
?>
</td>
<td><?= $d['pembayaran']; ?></td>
<td><?= $d['ospek']; ?></td>
</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</div>

<a href="dashboard.php"
class="back-btn">

← Kembali ke Dashboard

</a>

<?php include '../template/footer.php'; ?>