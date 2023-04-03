<!-- Header -->
<?php
$page = "PinjamRuang - Home";
include "layout/header.php";
?>

<body>
  <!-- Navbar-->
  <?php include "layout/navbar.php" ?>

  <!-- Page Content-->
  <div class="page-content page-details">
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active">Detail Ruangan</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <section class="store-gallery" id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" data-aos="zoom-in">
            <transition name="slide-fade" mode="out-in">
              <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" class="w-100 main-image" alt="" />
            </transition>
          </div>
          <div class="col-lg-2">
            <div class="row">
              <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(photo, index) in photos" :key="photo.id" data-aos="zoom-in" data-aos-delay="100">
                <a href="#" @click="changeActive(index)">
                  <img :src="photo.url" class="w-100 thumbnail-image" :class="{ active: index == activePhoto }" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="store-details-container" data-aos="fade-up">
      <section class="store-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <h1>Ruangan A</h1>
              <div class="owner">Kapasitas 20 Orang</div>
              <div class="price">Rp. 100.000</div>
            </div>
            <div class="col-lg-2" data-aos="zoom-in">
              <a href="cart.php" class="btn btn-add px-4 text-white btn-block mb-3">Pinjam
              </a>
            </div>
          </div>
      </section>
      <section class="store-description">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-8">
              <p>
                The Nike Air Max 720 SE goes bigger than ever before with
                Nike's tallest Air unit yet for unimaginable, all-day comfort.
                There's super breathable fabrics on the upper, while colours
                add a modern edge.
              </p>
              <p>
                Bring the past into the future with the Nike Air Max 2090, a
                bold look inspired by the DNA of the iconic Air Max 90.
                Brand-new Nike Air cushioning underfoot adds unparalleled
                comfort while transparent mesh and vibrantly coloured details
                on the upper are blended with timeless OG features for an
                edgy, modernised look.
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  <!-- Footer-->
  <?php include "layout/footer.php" ?>
  <?php include "layout/script.php" ?>

  <!-- Script Page-->
  <script src="/vendor/vue/vue.js"></script>
  <script>
    var gallery = new Vue({
      el: "#gallery",
      mounted() {
        AOS.init();
      },
      data: {
        activePhoto: 0,
        photos: [{
            id: 1,
            url: "/images/product-details-1.jpg",
          },
          {
            id: 2,
            url: "/images/product-details-2.jpg",
          },
          {
            id: 3,
            url: "/images/product-details-3.jpg",
          },
          {
            id: 4,
            url: "/images/product-details-4.jpg",
          },
        ],
      },
      methods: {
        changeActive(id) {
          this.activePhoto = id;
        },
      },
    });
  </script>

</body>

</html>