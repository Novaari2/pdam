<?php

require 'koneksi.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM petugas WHERE username = '$user' AND password = '$pass'");

$cek = mysqli_num_rows($query);

if ($cek > 0) { //jika ada
    $data = mysqli_fetch_array($query);
    if ($data['level'] == "admin") {

        session_start();
        // $_SESSION['id_pengaduan'] = $data['pengaduan'];
        $_SESSION['id_petugas'] = $data['id_petugas'];
        $_SESSION['user'] = $user;
        // $_SESSION['id_pengaduan'] = $data['pengaduan'];
        $_SESSION['nama'] = $data['nama_petugas'];
        $_SESSION['level'] = $data['level'];
        header('location:admin/admin.php');
    } else if ($data['level'] == "petugas") {
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['nama'] = $data['nama_petugas'];
        $_SESSION['level'] = $data['level'];
        header('location:petugas/petugas.php');
    }
} else {
?>
    <script>
        alert("Username atau password tidak ditemukan");
        window.location = "index2.php";
    </script>
<?php
}
?>