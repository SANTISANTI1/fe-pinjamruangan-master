<?php
include '../koneksi.php';
if(isset($_POST['foto'])){
	$id = $_GET['id'];
	$id_ruangan      = $_POST['id_ruangan'];
	$direktori = "../ruangan/";
	$file_name = $_FILES['foto']['name'];
	move_uploaded_file($_FILES['foto']['tmp_name'],$direktori.$file_name);

	mysqli_query($koneksi,"INSERT INTO gallery set id_ruangan = '$id_ruangan' gambar='$file_name' WHERE id_gallery='$id'");
	echo '<script>alert("Tambah data berhasil")</script>';
	echo '<script>window.location="detailruangan.php"</script>';
}