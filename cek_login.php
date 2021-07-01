<?php

require 'koneksi.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM masyarakat WHERE username = '$user' AND password = '$pass'");

$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $data = mysqli_fetch_array($query);
    session_start();
    $_SESSION['nama'] = $user;
    $_SESSION['nik'] = $data['nik'];
    header('location: masyarakat.php');
} else {
?>
    <script>
        alert("Username atau password tidak ditemukan");
        window.location = "index.php";
    </script>
<?php
}
?>