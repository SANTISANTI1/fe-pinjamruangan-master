<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
    <div class="container-fluid">
        <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
            &laquo; Menu
        </button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Desktop Menu-->
            <ul class="navbar-nav d-none d-lg-flex ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <img src="/images/icon-user.png" alt="Icon User" class="rounded-circle mr-2 profile-picture" />
                        Hi, <?php echo $_SESSION['level']; ?>
                    </a>
                    <div class="dropdown-menu">
                        <a href="dashboard.php" class="dropdown-item">Dashboard</a>
                        <a href="akun.php" class="dropdown-item">Kelolah Akun</a>
                        <div class="dropdown-divider"></div>
                        <a href="../../logout.php" class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
            <!-- Mobile Menu-->
            <ul class="navbar-nav d-block d-lg-none">
                <li class="nav-item">
                    <a href="#" class="nav-link"> Hi, Farhan </a>
                </li>
            </ul>
        </div>
    </div>
</nav>