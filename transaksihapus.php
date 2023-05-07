<?php
require '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM pemesanan WHERE id_pesan='$id'");
header("location:transaksi.php");