<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "lapor_masyarakat";

$koneksi = mysqli_connect($host, $username, $password, $db);

// cek koneksi
if ($koneksi) {
    // echo "koneksi ke database berhasil";
} else {
    echo "koneksi gagal" . mysqli_connect_error();
}
