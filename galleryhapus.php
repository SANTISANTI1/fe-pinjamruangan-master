<?php
require '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM gallery WHERE id_gambar='$id'");
header("location:detailruangan.php");