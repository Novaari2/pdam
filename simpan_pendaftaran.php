<?php
require('koneksi.php');

$tgl = $_POST['tgl_pendaftaran'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$jumlah_penghuni = $_POST['jumlah_penghuni'];
$jenis_bangunan = $_POST['jenis_bangunan'];
$foto = $_FILES['foto']['name'];
$file = $_FILES['foto']['tmp_name'];
$kk = $_FILES['kk']['name'];
$file_kk = $_FILES['kk']['tmp_name'];
$status = 'proses';

$query = "INSERT INTO pendaftaran (tgl_pendaftaran,nik,nama,alamat,pekerjaan,jumlah_penghuni,jenis_bangunan,foto,kk,status) VALUES ('$tgl','$nik','$nama','$alamat','$pekerjaan','$jumlah_penghuni','$jenis_bangunan','$foto','$kk','$status')";
$result = mysqli_query($koneksi, $query);
// echo json_encode($result);
// die;
// if ($koneksi->query($query) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $query . "<br>" . $koneksi->error;
// }

move_uploaded_file($file, "foto/" . $foto);
if ($result) {
?>
    <script>
        alert('Pendaftaran berhasil dikirim');
        window.location = "masyarakat.php";
    </script>
<?php
}
?>