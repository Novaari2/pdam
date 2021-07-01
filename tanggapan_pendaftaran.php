<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div class="card shadow">
        <div class="card-header">
            Lihat Pengaduan
        </div>
        <div class="card-body">
            <a href="?url=lihat_pendaftaran" class="btn btn-success col-sm-1 btn-sm"><i class="fas fa-arrow-left"></i>Kembali</a>
        </div>
        <div class="card-body">
            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                <?php
                require("koneksi.php");
                $query = mysqli_query($koneksi, "SELECT * FROM pendaftaran, tanggapan_pendaftaran WHERE tanggapan_pendaftaran.id_tanggapan_pendaftaran='$_GET[id]' AND tanggapan_pendaftaran.id_pendaftaran = pendaftaran.id_pendaftaran");
                $cek = mysqli_num_rows($query);
                if ($cek < 1) //jika data tidak ditemukan
                {
                    echo "<font color='red'>Mohon Bersabar, Pendaftaran Belum Ditanggapi</font>";
                } else {
                    if ($data = mysqli_fetch_array($query)) {


                ?>
                        <div class="form-group col-sm-6">
                            <label>Tanggal Tanggapan</label>
                            <input type="text" name="tgl_tanggapan" value="<?= $data['tgl_tanggapan']; ?>" class="form-control" readonly>
                        </div>
                        <!-- <div class="form-group col-sm-6">
                        <label>NIK</label>
                        <input type="text" name="nik" value="<?= $_SESSION['nik']; ?>" class="form-control" readonly>
                    </div> -->
                        <!-- <div class="form-group col-sm-6">
                            <label>Tulis Laporan</label>
                            <textarea type="text" name="isi_laporan" rows="7" class="form-control" readonly><?= $data['isi_laporan'] ?></textarea>
                        </div> -->

                        <div class="form-group col-sm-6">
                            <label>Balasan</label>
                            <textarea type="text" name="isi_tanggapan" rows="7" class="form-control" readonly><?= $data['tanggapan'] ?></textarea>
                        </div>


                <?php }
                }
                ?>
            </form>
        </div>
    </div>








    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>