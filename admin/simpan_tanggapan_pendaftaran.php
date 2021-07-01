<?php
require("../koneksi.php");

$id_pendaftaran = $_POST['id_pendaftaran'];
$tgl = $_POST['tgl_tanggapan'];
$tanggapan = $_POST['tanggapan'];
$nama_petugas = $_POST['nama_petugas'];
$status = 'selesai';


$query = mysqli_query($koneksi, "INSERT INTO tanggapan_pendaftaran (id_pendaftaran,tgl_tanggapan,tanggapan,nama_petugas) VALUES ('$id_pendaftaran','$tgl','$tanggapan','$nama_petugas')");
// echo json_encode($query);
// die;
// if ($koneksi->query($query) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $query . "<br>" . $koneksi->error;
// }
// die;

$update = mysqli_query($koneksi, "UPDATE pendaftaran set status = '$status' WHERE id_pendaftaran = '$id_pendaftaran'");
if ($query) {
    // var_dump($query);
?>
    <script>
        alert('Pendaftaran Sudah Ditanggapi');
        window.location = "admin.php?url=verifikasi_pendaftaran";
    </script>
<?php
}
?>