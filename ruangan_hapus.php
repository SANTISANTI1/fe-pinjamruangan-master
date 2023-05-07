<?php
require '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM ruangan WHERE id_ruangan='$id'");
header("location:ruangan.php");