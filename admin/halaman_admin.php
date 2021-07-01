<?php
require("../koneksi.php");

if (isset($_GET['url'])) {
    $url = $_GET['url'];

    switch ($url) {
        case 'verifikasi_pengaduan';
            include 'verifikasi_pengaduan.php';
            break;
        case 'detail_pengaduan';
            include 'detail_pengaduan.php';
            break;
        case 'tanggapan';
            include 'tanggapan.php';
            break;
        case 'lihat_petugas';
            include 'lihat_petugas.php';
            break;
        case 'tambah_petugas';
            include 'tambah_petugas.php';
            break;
        case 'edit_petugas';
            include 'edit_petugas.php';
            break;
        case 'lihat_masyarakat';
            include 'lihat_masyarakat.php';
            break;
        case 'preview_masyarakat';
            include 'preview_masyarakat.php';
            break;
        case 'verifikasi_pendaftaran';
            include 'verifikasi_pendaftaran.php';
            break;
        case 'detail_pendaftaran';
            include 'detail_pendaftaran.php';
            break;
        case 'tanggapan_pendaftaran';
            include 'tanggapan_pendaftaran.php';
            break;
        case 'preview_pengaduan';
            include 'preview_pengaduan.php';
            break;
        case 'preview_pendaftaran';
            include 'preview_pendaftaran.php';
            break;
    }
} else {
?>
    Selamat Datang Di Aplikasi PDAM Kendal <br> <br>
    Anda Login Sebagai : <h2><b><?= $_SESSION['nama'];


                                $query = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status = 'proses'");
                                if ($cek = mysqli_num_rows($query)) {
                                ?>

                <br>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Laporan Pengaduan: </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> Total <?= $cek ?> Laporan</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-command fa-2x text-gray-300"></i>
                                            <span class="badge badge-danger danger-counter"><?= $cek ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php

                                } else {
                    ?>
                        <br><br>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Laporan Pengaduan: </div>
                                                    <div class="h6 mb-0 font-weight-bold text-gray-800"> Tidak Ada Laporan Baru</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-command fa-2x text-gray-300"></i>
                                                    <span class="badge badge-danger danger-counter"><?= $cek ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                }

                            ?>


                            <?php
                            $query_daftar = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE status = 'ditanggapi'");
                            if ($cek_daftar = mysqli_num_rows($query_daftar)) {
                            ?>
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Laporan Pendaftaran: </div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> Total <?= $cek_daftar ?> Pendaftaran</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-command fa-2x text-gray-300"></i>
                                                    <span class="badge badge-danger danger-counter"><?= $cek_daftar ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                            } else { ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Laporan Pendaftaran: </div>
                                            <div class="h6 mb-0 font-weight-bold text-gray-800"> Tidak Ada Pendaftaran Baru</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-command fa-2x text-gray-300"></i>
                                            <span class="badge badge-danger danger-counter"><?= $cek_daftar ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                <?php
                            }
                        }
                        // }
                ?>