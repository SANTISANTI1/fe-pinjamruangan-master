<!-- Header -->
<?php
$page = "Data Ruangan";
include "layout/header.php";
?>

<?php
if (isset($_POST['ubah'])) {
    $id = $_GET['id'];
    $nama_ruangan        = $_POST['nama_ruangan'];
    $deskripsi             = $_POST['deskripsi'];
    $kapasitas             = $_POST['kapasitas'];
    $harga                 = $_POST['harga'];



    $query = mysqli_query($koneksi, "UPDATE ruangan SET nama_ruangan = '$nama_ruangan', deskripsi = '$deskripsi', kapasitas = '$kapasitas', harga = '$harga' WHERE id_ruangan = '$id'");

    if ($query) {
        echo "<script>alert('Data berhasil diubah');window.location='ruangan.php'</script>";
    } else {
        echo "<script>alert('Data gagal diubah');window.location='ruangan.php'</script>";
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
                            <h2 class="dashboard-title">Ruangan Ternyaman</h2>
                            <p class="dashboard-subtitle">Room Details</p>
                        </div>
                        <div class="dashboard-content">

                            <div class="row">
                                <div class="col-12">
                                    <form action=" " method="post">
                                        <?php
                                        $id = $_GET['id'];
                                        $query = mysqli_query($koneksi, "SELECT * FROM ruangan WHERE id_ruangan = '$id'");
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Nama Ruangan</label>
                                                                <input type="text" class="form-control" name="nama_ruangan" value="<?= $data['nama_ruangan'] ?>" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Kapasitas</label>
                                                                <input type="text" class="form-control" name="kapasitas" value="<?= $data['kapasitas'] ?>" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Harga Sewa</label>
                                                                <input type="number" class="form-control" name="harga" value="<?= $data['harga'] ?>" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Description</label>
                                                                <textarea name="deskripsi"><?= $data['deskripsi'] ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col text-right">
                                                            <button type="submit" name="ubah" class="btn btn-success px-5 btn-block">
                                                                Update Product
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </form>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <div class="card">
                                        <div class=" card-body">
                                            <div class="row p-3">
                                                <?php
                                                $res = mysqli_query($koneksi, "SELECT*FROM gallery WHERE id_ruangan='$id'");
                                                foreach ($res as $value) {
                                                ?>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="gallery-container">
                                                            <img src="/ruangan/<?= $value['gambar'] ?>" alt="" class="w-100" style="object-fit: contain;"/>
                                                            <a href="galleryedit.php?q=del&id=<?= $value['id_gambar'] ?>" class="delete-gallery">
                                                                <img src="/images/icon-delete.svg" alt="" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>

                                            <form action="galleryedit.php" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="id_ruangan" value="<?= $id ?>">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Foto </label>
                                                        <input type="file" name="gambar[]" class="form-control" multiple />
                                                        <p class="color:red"> Ekstensi yang diperbolehkan .png | .jpg | .jpeg |.gif </p>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" name="simpan" value="Simpan" class="btn btn-secondary btn-block mt-3" ">
                                                            Add Photo
                                                        </button>
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
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <?php include "layout/footer.php" ?>

    <!-- Script Page-->
    <script src=" https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
                                                        <script>
                                                            function thisFileUpload() {
                                                                document.getElementById("file").click();
                                                            }
                                                        </script>
                                                        <script>
                                                            CKEDITOR.replace('deskripsi');
                                                        </script>

</body>

</html>