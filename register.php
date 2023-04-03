<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>PinjamRuang - Register</title>

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
  <div class="page-content page-auth" id="register">
    <div class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center justify-content-center row-login">
          <div class="col-lg-4">
            <h2>
              Daftar Akun Untuk<br />
              Meminjam Ruangan
            </h2>
            <form class="mt-3">
              <div class="form-group">
                <label>Nama Lengkap (Tanpa Gelar)</label>
                <input type="text" class="form-control is-valid" v-model="name" autofocus />
              </div>
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control is-valid" v-model="username" autofocus />
              </div>
              <div class="form-group">
                <label>NIP/NIM</label>
                <input type="number" class="form-control" />
              </div>
              <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control is-invalid" v-model="email" />
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" />
              </div>
              <div class="form-group">
                <label>Masukan Ulang Password</label>
                <input type="password" class="form-control" />
              </div>
              <div class="form-group">
                <label>Jurusan</label>
                <input type="text" class="form-control" />
              </div>
              <div class="form-group">
                <label>No.HP</label>
                <input type="number" class="form-control" />
              </div>
              <a href="register-success.php" class="btn btn-add btn-block mt-4">Sign Up Now</a>
              <a href="login.php" class="btn btn-signup btn-block mt-2">Back to Sign In</a>
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
  <script src="/vendor/vue/vue.js"></script>
  <script src="https://unpkg.com/vue-toasted"></script>
  <script>
    Vue.use(Toasted);

    var register = new Vue({
      el: "#register",
      mounted() {
        AOS.init();
        this.$toasted.error("Maaf, tampaknya email sudah terdaftar pada sistem kami.", {
          position: "top-center",
          className: "rounded",
          duration: 1000,
        });
      },
      data() {
        return {
          name: "Farhan Hidayat",
          email: "farhanarchman@gmail.com",
          username: "farhan",
        };
      },
    });
  </script>
  <script src="/script/navbar-scroll.js"></script>
</body>

</html>