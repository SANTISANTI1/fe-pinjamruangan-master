<!-- Header -->
<?php
$page = "Data Pengguna";
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
                            <h2 class="dashboard-title">Data Pengguna</h2>
                            <p class="dashboard-subtitle">Manage it well and get money</p>
                        </div>
                        <div class="dashboard-content">
                            <!-- <div class="row">
                                <div class="col-12">
                                    <a href="/dashboard-products-create.html" class="btn btn-success">
                                        Add New Product
                                    </a>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-md-12">
                                <a href="pengguna-edit.php" class="card card-dashboard-product d-block">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover scroll-horizontal-vertical w-100" id="myTable">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Email</th>
                                                            <th>Alamat</th>
                                                            <th>No.HP</th>
                                                            <th>Instansi</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $no = 1;
                                                        $level="pengunjung";
                                                        $lagu = mysqli_query($koneksi, "SELECT * From user order by id_user DESC");
                                                        while ($data = mysqli_fetch_array($lagu)) {
                                                    ?>
                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $data['nama_lengkap']; ?></td>
                                                            <td><?= $data['email_user']; ?></td>
                                                            <td><?= $data['alamat']; ?></td>
                                                            <td><?= $data['telp']; ?></td>
                                                            <td><?= $data['instansi']; ?></td>
                                                            <td>
                                                                <a class="btn btn-info" href="pengguna-edit.php?id=<?= $data['id_user'] ?>">
                                                                    Sunting
                                                                </a>
                                                                <a class="btn btn-danger" href="#">
                                                                    Hapus
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        
                                                        <?php } ?>
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

    <!-- Bootstrap core JavaScript -->
    <?php include "layout/footer.php" ?>

    <!-- Script Page-->

</body>

</html>