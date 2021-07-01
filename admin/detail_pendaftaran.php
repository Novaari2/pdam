<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PDAM Kendal</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div class="card shadow">
        <div class="card-header">
            Detail Pendaftaran
        </div>
        <?php
        require("../koneksi.php");
        $query = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE id_pendaftaran='$_GET[id]'");
        $data = mysqli_fetch_array($query);
        if ($query) {
        ?>
            <div class="card-body">
                <div class="col-sm-6">
                    <a href="?url=verifikasi_pendaftaran" class="btn btn-success btn-sm"><i class="fas fa-arrow-left"></i>Kembali</a>
                </div>
            </div>



            <div class="card-body">
                <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">

                    <div class="form-group col-sm-6">
                        <label>Tanggal Pendaftaran</label>
                        <input type="text" name="tgl_pendaftaran" value="<?= $data['tgl_pendaftaran']; ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>NIK</label>
                        <input type="text" name="nik" value="<?= $data['nik']; ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Nama</label>
                        <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Alamat</label>
                        <input type="text" name="alamat" value="<?= $data['alamat'] ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan" value="<?= $data['pekerjaan'] ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Jumlah Penghuni</label>
                        <input type="text" name="jml_penghuni" value="<?= $data['jumlah_penghuni'] ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Jenis Bangunan</label>
                        <input type="text" name="jenis_bangunan" value="<?= $data['jenis_bangunan'] ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Foto KTP:</label>
                        <img src="../foto/<?= $data['foto'] ?>" width="150" readonly>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Foto KTP:</label>
                        <img src="../foto/<?= $data['kk'] ?>" width="150" readonly>
                    </div>
                <?php } ?>
                </form>
            </div>
    </div>








    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>