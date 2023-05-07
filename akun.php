<!-- Header -->
<?php
$page = "Akun Saya";
include "layout/header.php";
        
        $id = $_SESSION['id'];
        if (isset($_POST['ubah'])) {
            $id = $_SESSION['id'];
            $username   = $_POST['username'];
            $name       = $_POST['name'];
            $email      = $_POST['email'];
            $alamat     = $_POST['alamat'];
            $no_hp      = $_POST['no_hp'];
            $instansi   = $_POST['instansi'];
                            
            $query = mysqli_query($koneksi, "UPDATE user SET username = '$username', nama_lengkap = '$name', email_user = '$email', alamat = '$alamat', telp = '$no_hp', instansi = '$instansi' WHERE id_user = '$id'");
                if ($query) {
                    echo "<script>alert('Data berhasil diubah');window.location='akun.php'</script>";
                } else {
                    echo "<script>alert('Data gagal diubah');window.location='akun.php'</script>";
                    }
                }
                        
                        if (isset($_POST['pass'])) {
                            $id = $_SESSION['id'];
                            $pass = md5($_POST['pass_lama']);
                            $pass_baru = md5($_POST['pass_baru']);
                            $pass_confirm = md5($_POST['pass_confirm']);
                            
                            $cek = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id'");
                            $data_cek = mysqli_fetch_array($cek);
                        
                            if ($pass != $data_cek['password_user']) {
                                echo "<script>alert('Katasandi lama salah');window.location='akun.php'</script>";
                            } else if ($pass_baru != $pass_confirm) {
                                echo "<script>alert('Katasandi baru tidak sama');window.location='akun.php'</script>";
                            } else {
                                $query = mysqli_query($koneksi, "UPDATE user SET password_user = '$pass_baru' WHERE id_user = '$id'");
                                echo "<script>alert('Katasandi berhasil diubah');window.location='akun.php'</script>";
                            }
                        }


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
                            <h2 class="dashboard-title">Akun Saya</h2>
                            <p class="dashboard-subtitle">Perbaharui info akunmu</p>
                        </div>

                        <div class="dashboard-content">
                            <div class="row">
                                <div class="col-12">
                                    <form action="" method="POST">
                                    <?php
                                        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id'");
                                        while ($data = mysqli_fetch_array($query)){
                                    ?>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">Username</label>
                                                            <input type="text" class="form-control" id="name" name="username" value="<?= $data['username'] ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" id="email" name="email" value="<?= $data['email_user'] ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="name">Nama Lengkap</label>
                                                            <input type="text" class="form-control" id="name" name="name" value="<?= $data['nama_lengkap'] ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="alamat">Alamat</label>
                                                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['alamat'] ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="no_hp">No.HP</label>
                                                            <input type="number" class="form-control" id="no_hp" name="no_hp" value="<?= $data['telp'] ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="instansi">Instansi</label>
                                                            <input type="text" class="form-control" id="instansi" name="instansi" value="<?= $data['instansi'] ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col text-right">
                                                        <button type="submit" name="ubah" class="btn btn-add px-5">
                                                            Save Now
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="dashboard-heading">
                                        <h2 class="dashboard-title">Edit Password</h2>
                                        <p class="dashboard-subtitle">Perbaharui password akunmu</p>
                                    </div>
                                    <div class="dashboard-content">
                            <div class="row">
                                <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label> Password Lama </label>
                                                            <input type="password" class="form-control" name="pass_lama"  />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label> Password Baru </label>
                                                            <input type="password" class="form-control" name="pass_baru"  />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label> Konfirmasi Password </label>
                                                            <input type="password" class="form-control" name="pass_confirm"  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col text-right">
                                                        <button type="submit" name="pass" class="btn btn-add px-5">
                                                            Save Now
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
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

</body>

</html>