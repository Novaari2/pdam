<?php

require("../koneksi.php");

$id = $_POST['id_petugas'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];

$query = mysqli_query($koneksi, "UPDATE petugas SET nama_petugas = '$nama',username = '$username',password = '$password',telp = '$telp',level = '$level' WHERE id_petugas = '$id'");

if ($query) {
?>
    <script>
        alert('Data berhasil Diubah');
        window.location = 'admin.php?url=lihat_petugas';
    </script>
<?php
}
?>