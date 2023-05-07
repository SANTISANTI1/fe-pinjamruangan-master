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
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 gallery-container">
                                    <a href="detailruangan.php?id=<?=$data['id_ruangan'] ?>" class="card card-dashboard-product d-block">
                                        <div class="card-body">
                                            <img src="../ruangan/<?=$data['room_image'] ?>" alt="" class="w-100 mb-2" />
                                            <div class="product-title"><?= $data['nama_ruangan'] ?></div>
                                            <div class="product-category"><?= $data['kapasitas'] ?></div>
                                        </div>
                                    </a>
                                    <a href="ruangan_hapus.php?id=<?=$data['id_ruangan'] ?>" class="delete-gallery">
                                        <img src="/images/icon-delete.svg" alt="" />
                                    </a>
                                </div>
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