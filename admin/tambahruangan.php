<!-- Header -->
<?php
$page = "Data Ruangan";
include "layout/header.php";
?>

<body>
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            <!-- Sidebar -->
            <?php include "layout/sidebar.php" ?>

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <!-- Navbar -->
                <?php include "layout/navbar.php" ?>

                <!-- Section Content -->
                <div class="section-content section-dashboard-home" data-aos="fade-up">
                    <div class="container-fluid">
                        <div class="dashboard-heading">
                            <h2 class="dashboard-title">Tambah Ruangan Baru</h2>
                            <p class="dashboard-subtitle">
                                Informasi Ruangan
                            </p>
                        </div>
                        <div class="dashboard-content">
                            <div class="row">
                                <div class="col-12">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Nama Ruangan</label>
                                                            <input type="text" name="nama_ruangan" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Kapasitas</label>
                                                            <input type="number" name="kapasitas" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Harga Sewa</label>
                                                            <input type="number" name="harga" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <textarea name="deskripsi"></textarea>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Foto 1</label>
                                                            <input type="file" name="file" required="required" class="form-control" multiple />
                                                            <!-- <p class="text-muted">Kamu dapat memilih lebih dari satu file</p> -->
                                                            <p class="color:red"> Ekstensi yang diperbolehkan .png | .jpg | .jpeg |.gif </p>
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <div class="row">
                                                    <div class="col text-right">
                                                        <button type="submit" name="tambah" value="Simpan" class="btn btn-add px-5 btn-block">
                                                            Save Now
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                    </form>
                                    <?php
                                    if (isset($_POST['tambah'])) {
                                        $nama_ruangan   = $_POST['nama_ruangan'];
                                        $kapasitas      = $_POST['kapasitas'];
                                        $harga          = $_POST['harga'];
                                        $deskripsi      = $_POST['deskripsi'];

                                        $query          = mysqli_query($koneksi, "INSERT INTO ruangan VALUES(null,'$nama_ruangan','$deskripsi,'$kapasitas','$harga')");
                                        if ($query) {
                                            echo "<script>alert('Data Berhasil Ditambahkan');window.location='ruangan.php';</script>";
                                        } else {
                                            echo "<script>alert('Data Gagal Ditambahkan');window.location='ruangan.php';</script>";
                                        }
                                    }
                                
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <?php include "layout/footer.php" ?>

    <!-- Script Page-->
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('deskripsi');
    </script>

</body>

</html>