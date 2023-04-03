<!-- Header -->
<?php
$page = "PinjamRuang - Home";
include "layout/header.php";
?>

<body>
  <!-- Navbar-->
  <?php include "layout/navbar.php" ?>

  <!-- Page Content-->
  <div class="page-content page-home">
    <section class="store-carousel">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="zoom-in">
            <div id="storeCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li class="active" data-target="#storeCarousel" data-slide-to="0"></li>
                <li data-target="#storeCarousel" data-slide-to="1"></li>
                <li data-target="#storeCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/images/bg-web.jpg" alt="Carousel Image" class="d-block w-100" />
                </div>
                <div class="carousel-item">
                  <img src="/images/banner.jpg" alt="Carousel Image" class="d-block w-100" />
                </div>
                <div class="carousel-item">
                  <img src="/images/banner.jpg" alt="Carousel Image" class="d-block w-100" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="store-new-products">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>Ruangan Terpopuler</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <a href="details.php" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="
                      background-image: url('/images/products-apple-watch.jpg');
                    "></div>
              </div>
              <div class="products-text">Ruangan A</div>
              <div class="products-kapasitas">20 Orang</div>
              <div class="products-price">Rp. 100.000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a href="details.php" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="
                      background-image: url('/images/products-orange-bogotta.jpg');
                    "></div>
              </div>
              <div class="products-text">Ruangan B</div>
              <div class="products-kapasitas">30 Orang</div>
              <div class="products-price">Rp. 300.000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <a href="details.php" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="
                      background-image: url('/images/products-sofa-ternyaman.jpg');
                    "></div>
              </div>
              <div class="products-text">Ruangan C</div>
              <div class="products-kapasitas">50 Orang</div>
              <div class="products-price">Rp. 500.000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <a href="details.php" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="
                      background-image: url('/images/products-bubuk-maketti.jpg');
                    "></div>
              </div>
              <div class="products-text">Ruangan D</div>
              <div class="products-kapasitas">70 Orang</div>
              <div class="products-price">Rp. 700.000</div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="store-new-products">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>Ruangan Terpakai</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mt-2" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover scroll-horizontal-vertical w-100" id="myTable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Peminjam</th>
                        <th>Ruangan</th>
                        <th>Tanggal Dipakai</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Farhan Hidayat</td>
                        <td>Ruangan A</td>
                        <td><?= date("Y-m-d h:i:s"); ?></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Santi</td>
                        <td>Ruangan B</td>
                        <td><?= date("Y-m-d h:i:s"); ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Footer-->
  <?php include "layout/footer.php" ?>
  <?php include "layout/script.php" ?>

  <!-- Script Page-->
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>

</body>

</html>