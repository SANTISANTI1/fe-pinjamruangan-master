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
                                    <form action="proses_act.php" method="post" enctype="multipart/form-data">
                                        <div class="card">
                                            <div class="card-body">
                                            <div class="container">
                                                <h2 style="text-align: center;">UPLOAD MULTI FILE PHP</h2>
                                                <?php
                                                if(isset($_GET['alert'])){
                                                    if($_GET['alert']=="gagal_ukuran"){
                                                        ?>
                                                        <div class="alert alert-warning">
                                                            <strong>Warning!</strong> Ukuran File Terlalu Besar
                                                        </div>
                                                        <?php
                                                    }elseif ($_GET['alert']=="gagal_ektensi") {
                                                        ?>
                                                        <div class="alert alert-warning">
                                                            <strong>Warning!</strong> Ekstensi Gambar Tidak Diperbolehkan
                                                        </div>
                                                        <?php
                                                    }elseif ($_GET['alert']=="simpan") {
                                                        ?>
                                                        <div class="alert alert-success">
                                                            <strong>Success!</strong> Gambar Berhasil Disimpan
                                                        </div>
                                                        <?php
                                                    }				
                                                }
                                                ?>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Nama Ruangan</label>
                                                            <input type="text" name="nama_ruangan" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-4">
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
                                                    </div> -->
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Foto 1</label>
                                                            <input type="file" name="foto[]" required="required" class="form-control" multiple />
                                                            <p class="text-muted">Kamu dapat memilih lebih dari satu file</p>
                                                            <p class="color:red"> Ekstensi yang diperbolehkan .png | .jpg | .jpeg |.gif </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col text-right">
                                                        <button type="submit" name="" value="Simpan" class="btn btn-add px-5 btn-block">
                                                            Save Now
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                    </form>
                                    
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