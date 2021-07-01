<?php
require("../koneksi.php");

if (isset($_GET['url'])) {
    $url = $_GET['url'];

    switch ($url) {
        case 'lihat_tanggapan';
            include 'lihat_tanggapan.php'; //include halaman\
            break;
        case 'verifikasi_pengaduan';
            include 'verifikasi_pengaduan.php'; //include halaman\
            break;
        case 'detail_pengaduan';
            include 'detail_pengaduan.php'; //include halaman\
            break;
        case 'verifikasi_pendaftaran';
            include 'verifikasi_pendaftaran.php'; //include halaman\
            break;
        case 'detail_pendaftaran';
            include 'detail_pendaftaran.php'; //include halaman\
            break;
    }
} else {
?>
    Selamat Datang Di Aplikasi PDAM Kendal <br> <br>
    Anda Login Sebagai : <h2><b><?= $_SESSION['nama'];
                                echo '<br><br>';

                                // require("../koneksi.php");
                                $query = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status = '0'");
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
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Laporan Pengaduan: </div>
                                                    <div class="h6 mb-0 font-weight-bold text-gray-800"> Tidak Ada Pengaduan Baru</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-command fa-2x text-gray-300"></i>
                                                    <span class="badge badge-success danger-counter"><?= $cek ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>




                            <?php
                            $query_daftar = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE status = 'proses'");
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
                    <?php } else {
                    ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Laporan Pendaftaran: </div>
                                            <!-- <div class="h5 mb-0 font-weight-bold text-gray-800"> Total <?= $cek_daftar ?> Laporan</div> -->
                                            <div class="h6 mb-0 font-weight-bold text-gray-800"> Tidak Ada Pendaftaran Baru</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-command fa-2x text-gray-300"></i>
                                            <span class="badge badge-success danger-counter"><?= $cek_daftar ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php

                            }
                        }
                ?>