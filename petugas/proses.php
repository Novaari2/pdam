<?php

require("../koneksi.php");

$query = mysqli_query($koneksi, "UPDATE pengaduan SET status = 'proses' WHERE id_pengaduan = '$_GET[id]'");
if ($query) {
    header('location: petugas.php?url=verifikasi_pengaduan');
}
