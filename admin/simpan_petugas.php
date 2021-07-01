<?php

require("../koneksi.php");

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];

$query = mysqli_query($koneksi, "INSERT INTO petugas(nama_petugas,username,password,telp,level) VALUES ('$nama','$username','$password','$telp','$level')");

if ($query) {
?>
    <script>
        alert('Data berhasil ditambahkan');
        window.location = 'admin.php?url=lihat_petugas';
    </script>
<?php
}
?>