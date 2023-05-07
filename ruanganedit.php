<?php
                                    if (isset($_POST['ubah'])) {
                                        $id                 = $_GET['id'];
                                        $nama_ruangan    	= $_POST['nama_ruangan'];
                                        $deskripsi 	        = $_POST['deskripsi'];
                                        $kapasitas 		    = $_POST['kapasitas'];
                                        $harga 	            = $_POST['harga'];
                                        


                                        $query = mysqli_query($koneksi, "UPDATE ruangan SET nama_ruangan = '$nama_ruangan', deskripsi = '$deskripsi', kapasitas = '$kapasitas', harga = '$harga' WHERE id_ruangan = '$id'");

                                        if ($query) {
                                            echo "<script>alert('Data berhasil diubah');window.location='detailruangan.php'</script>";
                                        } else {
                                            echo "<script>alert('Data gagal diubah');window.location='detailruangan.php'</script>";
                                        }
                                    }
                                    ?>