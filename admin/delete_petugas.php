<?php

require("../koneksi.php");

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas = '$id'");

if ($query) {
?>
    <script>
        alert('Data berhasil dihapus');
        window.location = 'admin.php?url=lihat_petugas';
    </script>
<?php
}
?>