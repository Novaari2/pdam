<?php

require("../koneksi.php");

$nik = $_GET['nik'];

$query = mysqli_query($koneksi, "DELETE FROM masyarakat WHERE nik = '$nik'");

if ($query) {
?>
    <script>
        alert('Data berhasil dihapus');
        window.location = 'admin.php?url=lihat_masyarakat';
    </script>
<?php
}
?>