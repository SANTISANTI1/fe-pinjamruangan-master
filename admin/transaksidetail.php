<!-- Header -->
<?php
$page = "Detail Transaksi";
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
                            <h2 class="dashboard-title">PINJAM RUANG DAN GEDUNG</h2>
                            <p class="dashboard-subtitle">Transaksi / Detail</p>
                        </div>
                        <div class="dashboard-content" id="transactionsDetails">
                            <div class="row">
                                <div class="col-12">
                                <?php
                                    $transaksi = mysqli_query($koneksi, "SELECT * From pemesanan order by id_pesan  DESC");
                                    while ($data = mysqli_fetch_array($transaksi)) {
                                ?>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-md-4">
                                                    <img src="/images/product-details-dashboard.png" alt="" class="w-100 mb-3" />
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <div class="product-title">Nama pemesan</div>
                                                            <div class="product-subtitle"><?= $data['nama_pinjam']; ?></div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="product-title">Nama Ruangan</div>
                                                            <div class="product-subtitle"><?= $data['nama_ruangan']; ?></div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="product-title">Tanggal Transaksi</div>
                                                            <div class="product-subtitle"><?= date('d-m-Y', strtotime($data["tgl_pinjam"])) ; ?></div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="product-title">Status pembayaran</div>
                                                            <div class="product-subtitle text-danger">
                                                            <select class="input-control" name="status">
						                                            <!-- <option value="">--Pilih--</option> -->
						                                            <option value="1" <?= $data ['statuss'] == 1? 'selected':''; ?>>Sudah Bayar</option>
						                                            <option value="0" <?= $data ['statuss'] == 0? 'selected':''; ?>>Belum Bayar</option>
					                                        </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="product-title">Total Tagihan</div>
                                                            <div class="product-subtitle">Rp.<?= $data['biaya']; ?></div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                                <div class="product-title">Keperluan</div>
                                                                <div class="product-subtitle">
                                                                    Workshop
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-4">
                                                                <div class="product-title">Tanggal Digunakan</div>
                                                                <div class="product-subtitle">21 Maret 2023, 10.00-12.00 WIB</div>
                                                            </div>
                                                            <div class="col-12 col-md-4">
                                                                <div class="product-title">Jaminan</div>
                                                                <div class="product-subtitle">Sertifikat Vaksin</div>
                                                            </div>
                                                            <div class="col-12 col-md-4">
                                                                <div class="product-title">Berkas Pendukung</div>
                                                                <div class="product-subtitle"><a href="https://github.com/farhan-hidayat" terget="_blank">Sertifikat Vaksin</a></div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mt-4">
                                                    <h5>Informasi Tambahan</h5>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-12 col-md-6">
                                                                <div class="product-title">Instansi</div>
                                                                <div class="product-subtitle">
                                                                    Fakultas Teknik
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                            <div class="product-title">No.HP</div>
                                                            <div class="product-subtitle"><?= $data['no']; ?></div>
                                                            </div>
                                                            
                                                            <div class="col-12 col-md-3">
                                                                <div class="product-title">Status</div>
                                                                <select name="status" id="status" class="form-control" v-model="status">
                                                                    <option value="unpaid">Belum Bayar</option>
                                                                    <option value="paid">Sudah Bayar</option>
                                                                    <option value="unfinish">Belum Dikembalikan</option>
                                                                    <option value="finish">Sudah Dikembalikan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-12 text-right">
                                                            <button type="submit" class="btn btn-add btn-lg mt-4">
                                                                Save Now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  <?php } ?>
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