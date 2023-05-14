<?php
include '../koneksi.php';
if (isset($_GET['q'])) {
	$id_gambar = $_GET['id'];
	$res = mysqli_query($koneksi, "SELECT*FROM gallery WHERE id_gambar='$id_gambar'");
	if (mysqli_num_rows($res) == 1) {
		$data = mysqli_fetch_assoc($res);
		$res = mysqli_query($koneksi, "DELETE FROM gallery WHERE id_gambar='$id_gambar'");
		unlink("../ruangan/$data[gambar]");
		echo "<script>alert('Gambar berhasil dihapus!'); window.history.go(-1);</script>";
	} else {
		echo "<script>alert('Gagal! file tidak ditemukan'); window.history.go(-1);</script>";
	}
	exit();
}
if (isset($_POST['simpan'])) {
	$id_ruangan    	= $_POST['id_ruangan'];
	$tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');
	$filesReady = [];

	for ($i = 0; $i < count($_FILES['gambar']['name']); $i++) {
		$filename = $_FILES["gambar"]["name"][$i];
		$tmp_name = $_FILES["gambar"]["tmp_name"][$i];
		$type1 = explode('.', $filename);
		$type2 = $type1[1];
		if (!in_array($type2, $tipe_diizinkan)) {
			echo "<script>alert('Format file tidak diizinkan'); window.location='detailruangan.php?id=$id_ruangan'</script>";
			exit();
		} else {
			$newname = 'ruangan' . time() . "-$i." . $type2;
			array_push($filesReady, [
				"name" => $newname,
				"tmp" => $tmp_name,
			]);
		}
	}

	foreach ($filesReady as $value) {
		$exec = mysqli_query($koneksi, "INSERT INTO gallery VALUES(NULL,'$id_ruangan','$value[name]')");
		move_uploaded_file($value['tmp'], '../ruangan/' . $value['name']);
	}
	echo "<script>alert('Tambah gambar berhasil');window.location='detailruangan.php?id=$id_ruangan'</script>";
}
