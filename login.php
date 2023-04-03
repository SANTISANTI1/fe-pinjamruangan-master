<!DOCTYPE html>
<html lang="en">
<style>
        body {
          background-image: url("images/bg-web.jpg");
		  background-repeat: no-repeat;

          background-size: contain;

		  width : 100%;
		  margin : auto;

        }
    </style>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>PinjamRuang - Login</title>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="style/main.css" rel="stylesheet" />
</head>

<body>
  
  <!-- Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
    <div class="container">
      <a href="/index.html" class="navbar-brand">
        <img src="/images/logo.svg" alt="logo" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="ruangan.php" class="nav-link">Daftar Ruangan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content-->
  <div class="page-content page-auth">
    <div class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center row-login">
          <div class="col-lg-6 text-center">
            <!-- <img src="/images/login-placeholder.png" alt="Login Image" class="w-50 mb-4 mb-lg-none" /> -->
            <!-- <img src="/images/bg-web.jpg" alt="logo" /> -->
          </div>
          <div class="col-lg-5">
            <h2>
              Selamat Datang di Website Peminjaman Ruangan, <br />
              Sekretariat Daerah Kota Palangka Raya
            </h2>
            <?php
            if (isset($_GET['pesan'])) {
              if ($_GET['pesan'] == "gagal") {
                echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
              }
            }
            ?>
            <form action="cek_login.php" method="POST" class="mt-3">
              <div class="form-group">
                <!-- <label for="email">Email Address</label> -->
                <input type="email" name="email" class="form-control w-75" placeholder="Email" />
              </div>
              <div class="form-group">
                <!-- <label for="password">Password</label> -->
                <input type="password" name="password" class="form-control w-75" placeholder="Password"/>
              </div>
              <button type="submit" class="btn btn-add btn-block w-75 mt-4">Sign In to My Account</button>
              <a href="register.php" class="btn btn-signup btn-block w-75 mt-2">Sign Up</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer-->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <p class="pt-4 pb-2">
            Copyright &copy; 2023 | Design By
            <a href="https://github.com/farhan-hidayat">Farhan Hidayat Al Rachman</a>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="/vendor/jquery/jquery.slim.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="/script/navbar-scroll.js"></script>
</body>

</html>