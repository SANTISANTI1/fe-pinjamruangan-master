<!-- Header -->
<?php
$page = "Dashboard";
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
              <h2 class="dashboard-title">Dashboard</h2>
              <p class="dashboard-subtitle">Look what you have made today!</p>
            </div>
            <div class="dashboard-content">
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-2">
                    <div class="card-body">
                      <div class="dashboard-card-title">Pengguna</div>
                      <div class="dashboard-card-subtitle">7</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-2">
                    <div class="card-body">
                      <div class="dashboard-card-title">Ruangan</div>
                      <div class="dashboard-card-subtitle">10</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-2">
                    <div class="card-body">
                      <div class="dashboard-card-title">Sedang dipinjam</div>
                      <div class="dashboard-card-subtitle">2</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12 mt-2">
                  <h5 class="mb-3">Pinjaman Terakhir</h5>
                  <a href="transaksidetail.php" class="card card-list d-block">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-1">
                          <img src="/images/dashboard-icon-product-1.png" class="w-50" />
                        </div>
                        <div class="col-md-4">Ruangan A</div>
                        <div class="col-md-3">Farhan</div>
                        <div class="col-md-3">20 Maret 2023</div>
                        <div class="col-md-1 d-none d-md-block">
                          <img src="/images/dashboard-arrow-right.svg" />
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="transaksidetail.php" class="card card-list d-block">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-1">
                          <img src="/images/dashboard-icon-product-2.png" class="w-50" />
                        </div>
                        <div class="col-md-4">Ruangan B</div>
                        <div class="col-md-3">Santi</div>
                        <div class="col-md-3">22 Maret 2023</div>
                        <div class="col-md-1 d-none d-md-block">
                          <img src="/images/dashboard-arrow-right.svg" />
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="transaksidetail.php" class="card card-list d-block">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-1">
                          <img src="/images/dashboard-icon-product-3.png" class="w-50" />
                        </div>
                        <div class="col-md-4">Ruangan C</div>
                        <div class="col-md-3">Apri</div>
                        <div class="col-md-3">21 Maret 2023</div>
                        <div class="col-md-1 d-none d-md-block">
                          <img src="/images/dashboard-arrow-right.svg" />
                        </div>
                      </div>
                    </div>
                  </a>
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