<div class="footer">

<h3>Sistem Penerimaan Mahasiswa Baru</h3>

<p>2026 © PMB Kampus</p>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>

$(document).ready(function () {

    if ($('#myTable').length) {

        $('#myTable').DataTable({

            pageLength: 5,

            lengthMenu: [5, 10, 25, 50],

            language: {
                emptyTable: "Belum ada data",
                zeroRecords: "Data tidak ditemukan"
            }

        });

    }

});

</script>

</body>
</html>