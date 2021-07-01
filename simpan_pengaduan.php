<?php
require('koneksi.php');

$tgl = $_POST['tgl_pengaduan'];
$nik = $_POST['nik'];
$isi = $_POST['isi_laporan'];
$foto = $_FILES['foto']['name'];
$file = $_FILES['foto']['tmp_name'];
$status = 0;

$query = "INSERT INTO pengaduan (tgl_pengaduan,nik,isi_laporan,foto,status) VALUES ('$tgl','$nik','$isi','$foto','$status')";
$result = mysqli_query($koneksi, $query);
// print_r($result);
// if ($koneksi->query($query) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $query . "<br>" . $koneksi->error;
// }

move_uploaded_file($file, "foto/" . $foto);
if ($result) {
?>
    <script>
        alert('Laporan berhasil dikirim');
        window.location = "masyarakat.php";
    </script>
<?php
}
?>