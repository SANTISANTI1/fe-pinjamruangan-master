<?php
// mengaktifkan session pada php
session_start();
include "../koneksi.php";
$limit = 10 * 1024 * 1024;
// $ekstensi =  array('png','jpg','jpeg','gif');
$jumlahFile = count($_FILES['foto']['name']);
$ruangan = $_POST['nama_ruangan'];
 
for($x=0; $x<$jumlahFile; $x++){
	$namafile = $_FILES['foto']['name'][$x];
	$tmp = $_FILES['foto']['tmp_name'][$x];
	// $tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
	$ukuran = $_FILES['foto']['size'][$x];	
	if($ukuran > $limit){
		header("location:tambahruangan.php?alert=gagal_ukuran");		
		}else{		
			move_uploaded_file($tmp, '../file/'.date('d-m-Y').'-'.$namafile);
			$x = date('d-m-Y').'-'.$namafile;
			mysqli_query($koneksi,"INSERT INTO gallery VALUES(NULL, '$ruangan', '$x')");
			header("location:tambahruangan.php?alert=simpan");
		}
	}
