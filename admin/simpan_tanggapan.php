<?php

require("../koneksi.php");
$id_pengaduan = $_POST['id_pengaduan'];
$tgl = $_POST['tgl_tanggapan'];
$tanggapan = $_POST['tanggapan'];
$id_petugas = $_POST['id_petugas'];
$status = 'selesai';

$query = mysqli_query($koneksi, "INSERT INTO tanggapan (id_pengaduan,tgl_tanggapan,tanggapan,id_petugas) VALUES ('$id_pengaduan','$tgl','$tanggapan','$id_petugas')");

$update = mysqli_query($koneksi, "UPDATE pengaduan set status = '$status' WHERE id_pengaduan = '$id_pengaduan'");
if ($query) {
    // var_dump($query);
?>
    <script>
        alert('Data Sudah Ditanggapi');
        window.location = "admin.php?url=verifikasi_pengaduan";
    </script>
<?php
}
?>