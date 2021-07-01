<?php

if (isset($_GET['url'])) {
    $url = $_GET['url'];

    switch ($url) {
        case 'tulis_pengaduan';
            include 'tulis_pengaduan.php'; //include halaman\
            break;

        case 'lihat_pengaduan';
            include 'lihat_pengaduan.php'; //include halaman\
            break;

        case 'detail_pengaduan';
            include 'detail_pengaduan.php'; //include halaman\
            break;

        case 'lihat_tanggapan';
            include 'lihat_tanggapan.php'; //include halaman\
            break;
        case 'buat_pengajuan';
            include 'buat_pengajuan.php'; //include halaman\
            break;
        case 'lihat_pendaftaran';
            include 'lihat_pendaftaran.php'; //include halaman\
            break;
        case 'detail_pendaftaran';
            include 'detail_pendaftaran.php'; //include halaman\
            break;
        case 'tanggapan_pendaftaran';
            include 'tanggapan_pendaftaran.php'; //include halaman\
            break;
    }
} else {
?>
    Selamat Datang Di Aplikasi PDAM Kendal <br> <br>
    Anda Login Sebagai : <h2><b><?= $_SESSION['nama'];
                            }
                                ?>