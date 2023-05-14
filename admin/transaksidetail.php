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
                                    <form action="" method="post" enctype="multipart/form-data>
                                    <?php
                                    $id = $_GET['id'];
                                    $transaksi = mysqli_query($koneksi, "SELECT * From pemesanan INNER JOIN user ON  pemesanan.id_user = user.id_user 
                                    inner join ruangan on pemesanan.id_ruangan = ruangan.id_ruangan WHERE id_pesan = '$id' ");
                                    while ($data = mysqli_fetch_array($transaksi)) {
                                    ?>
                                        <div class=" card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-md-4">
                                                    <img src="/images/product-details-dashboard.png" alt="" class="w-100 mb-3" />
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <div class="product-title">Nama pemesan</div>
                                                            <div class="product-subtitle"><?= $data['nama_lengkap'] ?></div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="product-title">Nama Ruangan</div>
                                                            <div class="product-subtitle"><?= $data['nama_ruangan'] ?></div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="product-title">Tanggal Transaksi</div>
                                                            <div class="product-subtitle"><?= date('d-m-Y', strtotime($data["tgl_pinjam"])) ?></div>
                                                        </div>
                                                        <div class="col-12 col-md-3">
                                                            <div class="product-title">Status pembayaran</div>
                                                            <select name="statuss"  class="form-control" v-model="status">
                                                                <option <?php if($data['statuss']=='0'){echo "selected"; } ?> value="0">Belum Bayar</option>
                                                                <option <?php if($data['statuss']=='1'){echo "selected"; } ?> value="1">Sudah Bayar</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="product-title">Total Tagihan</div>
                                                            <div class="product-subtitle">Rp.<?= $data['biaya']; ?></div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="product-title">Kegiatan</div>
                                                            <div class="product-subtitle">
                                                                <?= $data['kegiatan'] ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-4">
                                                            <div class="product-title">Tanggal Digunakan</div>
                                                            <div class="product-subtitle"><?= date('d-m-Y', strtotime($data["tgl_pakai"])) ?></div>
                                                        </div>
                                                        <div class="col-12 col-md-4">
                                                            <div class="product-title">Jam Selesai</div>
                                                            <div class="product-subtitle"><?= date('H:i:s', strtotime($data["jam_selesai"])) ?></div>
                                                        </div>
                                                        <div class="col-12 col-md-4">
                                                            <div class="product-title">Berkas Pendukung</div>
                                                            <div class="product-subtitle"><a href="../produk/<?= $data['berkas'] ?>" terget="_blank"><?= $data['berkas'] ?></a></div>
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
                                                                    <?= $data['instansi'] ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <div class="product-title">No.HP</div>
                                                                <div class="product-subtitle"><?= $data['telp']; ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-12 text-right">
                                                            <button class="btn btn-add btn-lg mt-4" type="submit" name="ubah">
                                                                Save Now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                </form>
                                <?php
                                // menghubungkan php dengan koneksi database
                                require '../koneksi.php';
                                if (isset($_POST['ubah'])) {
                                    $id = $_GET['id'];
                                    // $id_pesan = $_POST['id_pesan'];
                                    $status = $_POST['statuss'];

                                    $query = mysqli_query($koneksi, "UPDATE pemesanan SET statuss = '$status' WHERE id_pesan = '$id'");

                                    if ($query) {
                                        echo "<script>alert('Data berhasil diubah');window.location='transaksi.php'</script>";
                                    } else {
                                        echo "<script>alert('Data gagal diubah');window.location='transaksi.php'</script>";
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

</body>

</html>