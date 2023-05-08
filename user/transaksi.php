<!-- Header -->
<?php
$page = "Transaksi";
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
                            <h2 class="dashboard-title">Transaksi</h2>
                            <p class="dashboard-subtitle">
                                Big result start from the small one
                            </p>
                        </div>
                        <div class="dashboard-content">
                            <ul class="nav nav-pills" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="sell-tab" data-toggle="tab" href="#sell" role="tab" aria-controls="sell" aria-selected="true">Pinjaman</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="buy-tab" data-toggle="tab" href="#buy" role="tab" aria-controls="buy" aria-selected="false">Pengembalian</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="sell" role="tabpanel" aria-labelledby="sell-tab">
                                    <div class="row">
                                        <div class="col-12 mt-2">
                                            <a href="transaksidetail.php" class="card card-list d-block">
                                                <?php
                                                $transaksi = mysqli_query($koneksi, "SELECT * From pemesanan inner join user on  pemesanan.id_user = user.id_user 
                                                    inner join ruangan on pemesanan.id_ruangan = ruangan.id_ruangan ORDER BY id_pesan DESC");
                                                while ($data = mysqli_fetch_array($transaksi)) {
                                                ?>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-1">
                                                                <img src="../ruangan/<?= $data['room_image'] ?>" class="w-50" />
                                                            </div>
                                                            <div class="col-md-4"><?= $data['nama_ruangan']; ?></div>
                                                            <div class="col-md-3"><?= $data['nama_lengkap']; ?></div>
                                                            <td><?= date('d-m-Y H:i:s', strtotime($data["tgl_pinjam"])); ?></td>
                                                            <div class="col-md-1 d-none d-md-block">
                                                                <img src="/images/dashboard-arrow-right.svg" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                                    <div class="row">
                                        <div class="col-12 mt-2">
                                            <a href="transaksidetail.php" class="card card-list d-block">
                                                <?php
                                                $no = 1;
                                                $transaksi = mysqli_query($koneksi, "SELECT * From pemesanan join user on user.id_user = pemesanan.id_user 
                                                join ruangan on ruangan.id_ruangan = pemesanan.id_ruangan 
                                                ORDER BY id_pesan DESC");
                                                while ($data = mysqli_fetch_array($transaksi)) {
                                                ?>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-1">
                                                                <img src="/images/dashboard-icon-product-1.png" class="w-50" />
                                                            </div>
                                                            <div class="col-md-4"><?= $data['nama_ruangan']; ?></div>
                                                            <div class="col-md-3"><?= $data['nama_lengkap']; ?></div>
                                                            <div class="col-md-3"><?= date('d-m-Y', strtotime($data["tgl_kembali"])); ?></td></div>
                                                            <div class="col-md-1 d-none d-md-block">
                                                                <img src="/images/dashboard-arrow-right.svg" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </a>
                                        </div>
                                    </div>
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

</body>

</html>