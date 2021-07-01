<?php
require 'koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telp'];

$sql = mysqli_query($koneksi, "INSERT INTO masyarakat VALUES ('$nik','$nama','$username','$pass','telp')");

if ($sql) {
?>
    <script>
        alert("Data berhasil disimpan");
        window.location = "index.php";
    </script>
<?php
}
?>