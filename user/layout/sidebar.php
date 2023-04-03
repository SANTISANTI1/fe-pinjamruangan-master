<div class="border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
        <img src="/images/dashboard-store-logo.svg" alt="" class="my-4" />
    </div>
    <div class="list-group list-group-flush">
        <a href="dashboard.php" class="list-group-item list-group-item-action <?php if ($page == "Dashboard") echo "active"; ?>">
            Dashboard
        </a>
        <a href="ruangan.php" class="list-group-item list-group-item-action <?php if ($page == "Data Ruangan") echo "active"; ?>">
            Daftar Ruangan
        </a>
        <a href="transaksi.php" class="list-group-item list-group-item-action <?php if ($page == "Transaksi") echo "active"; ?>">
            Transaksi
        </a>
    </div>
</div>