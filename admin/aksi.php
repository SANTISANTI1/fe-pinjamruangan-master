<?php 
include '../koneksi.php';
					if(isset($_POST['simpan'])){

						// menampung data file yang diupload
						$filename = $_FILES['gambar']['name'];
						$tmp_name = $_FILES['gambar']['tmp_name'];

						$type1 = explode('.', $filename);
						$type2 = $type1[1];

						$newname = 'gallery'.time().'.'.$type2;

						// menampung data format file yang diizinkan
						$tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');

						// validasi format file
						if(!in_array($type2, $tipe_diizinkan)){
							// jika format file tidak ada di dalam tipe diizinkan
							echo '<script>alert("Format file tidak diizinkan")</scrtip>';

						}else{
							// jika format file sesuai dengan yang ada di dalam array tipe diizinkan
							// proses upload file sekaligus insert ke database
							move_uploaded_file($tmp_name, '../gallery/'.$newname);

							$insert = mysqli_query($koneksi, "INSERT INTO gallery VALUES (
										null,
										'".$newname."'
										
											) ");

							if($insert){
								echo '<script>alert("Tambah data berhasil")</script>';
								echo '<script>window.location="detailruangan.php"</script>';
							}else{
								echo 'gagal '.mysqli_error($koneksi);
							}

						}

						
						
					}
				?>