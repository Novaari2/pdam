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
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div class="card shadow">
        <div class="card-header">
            Buat Pengajuan
        </div>
        <div class="card-body">
            <form action="simpan_pendaftaran.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group col-sm-6">
                    <label>Tanggal Pengajuan</label>
                    <input type="text" name="tgl_pendaftaran" value="<?= date('Y/m/d'); ?>" class="form-control" readonly>
                </div>
                <div class="form-group col-sm-6">
                    <label>NIK</label>
                    <input type="text" name="nik" value="<?= $_SESSION['nik']; ?>" class="form-control" readonly>
                </div>
                <div class="form-group col-sm-6">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                    <label>Alamat Pemasangan</label>
                    <textarea type="text" name="alamat" rows="7" class="form-control"></textarea>
                </div>
                <div class="form-group col-sm-6">
                    <label>Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                    <label>Jumlah Penghuni</label>
                    <input type="text" name="jumlah_penghuni" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                    <label>Jenis Bangunan</label>
                    <input type="text" name="jenis_bangunan" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                    <label>Upload Ktp</label>
                    <input type="file" name="foto" class="form-control" accept=".jpg,.png,.jpeg,.gif">
                    <font color="red">Tipe file: .jpg, .png, .jpeg</font>
                </div>
                <div class="form-group col-sm-6">
                    <label>Upload KK</label>
                    <input type="file" name="kk" class="form-control" accept=".jpg,.png,.jpeg,.gif">
                    <font color="red">Tipe file: .jpg, .png, .jpeg</font>
                </div>
                <div class="form-group col-sm-6">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <input type="reset" value="Reset" class="btn btn-danger">
                </div>
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