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
                                        <div class="col-md-12 mt-2">
                                            <div class="card">
                                                <div class="card-body">
                                                <?php
                                            $no = 1;
                                            $transaksi = mysqli_query($koneksi, "SELECT * From pemesanan order by id_pesan DESC");
                                            while ($data = mysqli_fetch_array($transaksi)) {
                                        ?>
                                                    <div class="table-responsive">
                                                        <table class="table table-hover scroll-horizontal-vertical w-100" id="myTable">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama</th>
                                                                    <th>Ruangan</th>
                                                                    <th>Tanggal Peminjaman</th>
                                                                    <th>Tanggal Dipakai</th>
                                                                    <th>Lama Pinjam</th>
                                                                    <th>Kegiatan</th>
                                                                    <th>Jam Dimulai</th>
                                                                    <th>Jam Selesai</th>
                                                                    <th>Berkas</th>
                                                                    <th>Status</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><?= $no++; ?></td>
                                                                    <td><?= $data['nama_pinjam']; ?></td>
                                                                    <td><?= $data['nama_ruangan']; ?></td>
                                                                    <td><?= $data['tgl_pinjam']; ?></td>
                                                                    <td><?= $data['tgl_pakai']; ?></td>
                                                                    <td><?= $data['lama_pinjam']; ?></td>
                                                                    <td><?= $data['kegiatan']; ?></td>
                                                                    <td><?= $data['jam_mulai']; ?></td>
                                                                    <td><?= $data['jam_selesai']; ?></td>
                                                                    <td><?= date("Y-m-d h:i:s"); ?></td>
                                                                    <td><span class="badge bg-danger">Belum Bayar</span></td>
                                                                    <td>
                                                                        <a class="btn btn-info" href="transaksidetail.php">
                                                                            Sunting
                                                                        </a>
                                                                        <a class="btn btn-danger" href="#">
                                                                            Hapus
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                              <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                                    <div class="row">
                                        <div class="col-md-12 mt-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover scroll-horizontal-vertical w-100" id="myTable1">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama</th>
                                                                    <th>Ruangan</th>
                                                                    <th>Tanggal Dipakai</th>
                                                                    <th>Status</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Farhan Hidayat</td>
                                                                    <td>Ruangan A</td>
                                                                    <td><?= date("Y-m-d h:i:s"); ?></td>
                                                                    <td><span class="badge bg-danger">Belum Dikembalikan</span></td>
                                                                    <td>
                                                                        <a class="btn btn-info" href="transaksidetail.php">
                                                                            Sunting
                                                                        </a>
                                                                        <a class="btn btn-danger" href="#">
                                                                            Hapus
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Santi</td>
                                                                    <td>Ruangan B</td>
                                                                    <td><?= date("Y-m-d h:i:s"); ?></td>
                                                                    <td><span class="badge bg-success">Sudah Dikembalikan</span></td>
                                                                    <td>
                                                                        <a class="btn btn-info" href="transaksidetail.php">
                                                                            Sunting
                                                                        </a>
                                                                        <a class="btn btn-danger" href="#">
                                                                            Hapus
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
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
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <?php include "layout/footer.php" ?>

    <!-- Script Page-->

</body>

</html>