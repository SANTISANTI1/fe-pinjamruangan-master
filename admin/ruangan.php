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
                            <h2 class="dashboard-title">Data Ruangan</h2>
                            <p class="dashboard-subtitle">Manage it well and get money</p>
                        </div>
                        <div class="dashboard-content">
                            <div class="row">
                                <div class="col-12">
                                    <a href="tambahruangan.php" class="btn btn-add">
                                        Tambah Ruangan Baru
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-4">
                            <?php
                                $ruangan = mysqli_query($koneksi, "SELECT * From ruangan order by id_ruangan DESC");
                                while ($data = mysqli_fetch_array($ruangan)) {
                            ?>
                                
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <a href="detailruangan.php?id=<?=$data['id_ruangan'] ?>" class="card card-dashboard-product d-block">
                                    <!-- <a href="kuis-edit.php?id=<?= $data['id_kuis'] ?>" class="btn btn-success btn-hapus"><i class="fas fa-edit"></i> Ubah</a> -->
                                        <div class="card-body">
                                            <img src="../kategori/<?=$data['room_image'] ?>" alt="" class="w-100 mb-2" />
                                            <div class="product-title"><?= $data['nama_ruangan'] ?></div>
                                            <div class="product-category"><?= $data['kapasitas'] ?></div>
                                        </div>
                                    </a>
                                </div>
                                <!-- <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <a href="detailruangan.php" class="card card-dashboard-product d-block">
                                        <div class="card-body">
                                            <img src="/images/product-card-1.png" alt="" class="w-100 mb-2" />
                                            <div class="product-title"><?= $data['kode ruangan'] ?></div>
                                            <div class="product-category">50 Orang</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <a href="detailruangan.php" class="card card-dashboard-product d-block">
                                        <div class="card-body">
                                            <img src="/images/product-card-1.png" alt="" class="w-100 mb-2" />
                                            <div class="product-title">Ruangan D</div>
                                            <div class="product-category">70 Orang</div>
                                        </div>
                                    </a>
                                </div> -->
                                <?php } ?>
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

</body>

</html>