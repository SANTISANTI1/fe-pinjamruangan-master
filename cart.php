<!-- Header -->
<?php
$page = "PinjamRuang - Home";
include "layout/header.php";
?>

<body>
  <!-- Navbar-->
  <?php include "layout/navbar.php" ?>

  <!-- Page Content-->
  <div class="page-content page-cart">
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">Keranjang</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <section class="store-cart">
      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-12 table-responsive">
            <table class="table table-borderless table-cart">
              <thead>
                <tr>
                  <td>Foto</td>
                  <td>Ruangan</td>
                  <td>Price</td>
                  <td>Menu</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 25%">
                    <img src="/images/product-cart-1.jpg" alt="Image Product" class="cart-image" />
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">Ruangan A</div>
                    <div class="product-subtitle">20 Orang</div>
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">Rp. 100.000</div>
                  </td>
                  <td style="width: 20%">
                    <a href="#" class="btn btn-remove-cart"> Remove </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr />
          </div>
          <div class="col-12">
            <h2 class="mb-4">Informasi Tambahan</h2>
          </div>
        </div>
        <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-4">
            <div class="form-group">
              <label for="instansi">Instansi</label>
              <input type="text" class="form-control" id="instansi" name="instansi" value="Setra Duta Camera" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="keperluan">Keperluan</label>
              <input type="text" class="form-control" id="keperluan" name="keperluan" value="Setra Duta Camera" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="hp">No.HP</label>
              <input type="number" class="form-control" id="hp" name="hp" value="0812121212" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="tglpakai">Tanggal Digunakan</label>
              <input type="date" class="form-control" id="tglpakai" name="tglpakai" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="jammulai">Dari</label>
              <input type="time" class="form-control" id="jammulai" name="jammulai" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="jamselesai">Sampai</label>
              <input type="time" class="form-control" id="jamselesai" name="jamselesai" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="jaminan">Jaminan</label>
              <input type="text" class="form-control" id="jaminan" name="jaminan" value="Sertifikat Vaksin" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="berkas">Berkas Pendukung</label>
              <input type="file" class="form-control" id="berkas" name="berkas" />
            </div>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr />
          </div>
          <div class="col-12">
            <h2>Informasi Pembayaran</h2>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-4 col-md-2">
            <div class="product-title text-success">Rp. 100.000</div>
            <div class="product-subtitle">Total</div>
          </div>
          <div class="col-8 col-md-3">
            <a href="success.php" class="btn btn-success mt-4 px-4 btn-block">Sewa Sekarang</a>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Footer-->
  <?php include "layout/footer.php" ?>
  <?php include "layout/script.php" ?>

  <!-- Script Page-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js" integrity="sha512-k6/Bkb8Fxf/c1Tkyl39yJwcOZ1P4cRrJu77p83zJjN2Z55prbFHxPs9vN7q3l3+tSMGPDdoH51AEU8Vgo1cgAA==" crossorigin="anonymous"></script>
</body>

</html>