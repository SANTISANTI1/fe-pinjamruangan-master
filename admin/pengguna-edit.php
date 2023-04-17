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
                            <p class="dashboard-subtitle"></p>
                        </div>
                        <div class="dashboard-content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <form action="" method="post">
                                            <?php
                                                $level="pengunjung";
                                                $pengguna = mysqli_query($koneksi, "SELECT * From user  where level_user='$level'");
                                                while ($data = mysqli_fetch_array($pengguna)) {
                                            ?>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nama Lengkap</label>
                                                                <input type="text" class="form-control" name="name" value="<?= $data['nama_lengkap'] ?>" />
                                                            </div>
                                                        </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="text" class="form-control" name="email" value="<?= $data['email_user'] ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Username</label>
                                                            <input type="text" class="form-control" name="username" value="<?= $data['username'] ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <input type="text" name="alamat" class="form-control" value="<?= $data['alamat'] ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>No.HP</label>
                                                            <input type="number" name="no_hp"  class="form-control" value="<?= $data['telp'] ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Instansi</label>
                                                            <input type="text" name="instansi" class="form-control" value="<?= $data['instansi'] ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col text-right">
                                                        <button type="submit" name="ubah" class="btn btn-success px-5 btn-block">
                                                            Update Data
                                                        </button>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                         </form>
                                    </div>
                                    <?php
                                        if (isset($_POST['ubah'])) {
                                        
                                        $username       = $_POST['username'];
                                        $name           = $_POST['name'];
                                        $email          = $_POST['email'];
                                        $alamat         = $_POST['alamat'];
                                        $no_hp          = $_POST['no_hp'];
                                        $instansi       = $_POST['instansi'];

                                        $query = mysqli_query($koneksi, "UPDATE user SET username='$username', nama_lengkap = '$name', email_user = '$email', alamat = '$alamat',telp = '$no_hp',instansi = '$instansi' WHERE level_user = '$level'");

                                        if ($query) {
                                                echo "<script>alert('Data berhasil diubah');window.location='pengguna.php'</script>";
                                            } else {
                                                echo "<script>alert('Data gagal diubah');window.location='pengguna.php'</script>";
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
        function thisFileUpload() {
            document.getElementById("file").click();
        }
    </script>
    <script>
        CKEDITOR.replace('editor');
    </script>

</body>

</html>
