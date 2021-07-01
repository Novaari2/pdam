<?php

require("../koneksi.php");

$query = mysqli_query($koneksi, "UPDATE pendaftaran SET status = 'ditanggapi' WHERE id_pendaftaran = '$_GET[id]'");
if ($query) {
    header('location: petugas.php?url=verifikasi_pendaftaran');
}
