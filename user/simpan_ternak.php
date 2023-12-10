<?php 

include "../koneksi.php";
if (isset($_POST['simpan_ternak'])) {
			$namaBurung=$_POST['nama_burung'];
	 		$idInduk=$_POST['id_induk'];	 
	 		$ring=$_POST['ring'];
			 $idUser=$_POST['id_user'];
	 			$query2="SELECT * FROM ternak WHERE ring='$ring'";
	 			$result2=mysqli_query($db,$query2);
	 			if (mysqli_num_rows($result2)<1) {
						
	 				 $tgl=$_POST['tgl'];
					 $warna=$_POST['warna'];
					 $gender=$_POST['gender'];
					 
					 $ket=$_POST['ket'];
					$foto=$_FILES['gambar']['name'];
					$tmp=$_FILES['gambar']['tmp_name'];
					if (empty($foto)) {
						# code...
							$query="INSERT INTO ternak SET nama_burung='$namaBurung', id_user='$idUser',id_induk='$idInduk', tgl_menetas='$tgl', warna='$warna', gender='$gender', ring='$ring', keterangan='$ket',status='0'";
							$result=mysqli_query($db,$query);
							if ($result) {
								?>
											 	<script type="text/javascript">
													var	id=5;
													alert('Registrasi Berhasil!');
													window.location='breedingManagemen.php?id='+id;
												</script>

											 	<?php

							}else{
								echo "string";
							}

					}else{

						$kode=rand(100,300);
									$fotobaru='ternak'.$kode.$foto;
									
									$path = "../asset/img/burung/".$fotobaru;
									if (move_uploaded_file($tmp, $path)) {

									$query="INSERT INTO ternak SET nama_burung='$namaBurung', id_user='$idUser', id_induk='$idInduk', tgl_menetas='$tgl', warna='$warna', gender='$gender', ring='$ring', image='$fotobaru', keterangan='$ket',status='0'";
									$result=mysqli_query($db,$query);
											if ($result) {
												?>

											 	<script type="text/javascript">
													var	id=5;
													alert('Registrasi Berhasil!');
													window.location='breedingManagemen.php?id='+id;
												</script>

											 	<?php									


											}else{
												echo "string";
											}

									}



					}
	 			
	 			}else{

	 				echo "<script type='text/javascript'>
				                              alert('Gagal, kode ring ternak sudah ada!');window.location=window.location=history.go(-1);</script>";

	 		

		}			
	

}elseif ($_POST['simpan_edit_ternak']) {
	$namaBurung=$_POST['nama_burung'];
	$idTernak=$_POST['id_ternak'];
	$ring=$_POST['ring'];
	$query="SELECT * FROM ternak WHERE id_ternak='$idTernak' || ring='$ring'";
	$result=mysqli_query($db,$query);
	if (mysqli_num_rows($result)>1) {
		echo "<script type='text/javascript'>
				                              alert('Gagal, kode ring ternak sudah ada!');window.location=window.location=history.go(-1);</script>";


	}else{
		 $idInduk=$_POST['id_induk'];
		 $tgl=$_POST['tgl'];
		 $warna=$_POST['warna'];
		 $gender=$_POST['gender'];
		
		 $ket=$_POST['ket'];
		 $foto=$_FILES['gambar']['name'];
		 $tmp=$_FILES['gambar']['tmp_name'];

		 	if (empty($foto)) {
					# code...
						$query="UPDATE ternak SET nama_burung='$namaBurung', id_induk='$idInduk', tgl_menetas='$tgl', warna='$warna', gender='$gender', ring='$ring', keterangan='$ket' WHERE id_ternak='$idTernak'";
						$result=mysqli_query($db,$query);
						if ($result) {?>
								<script type="text/javascript">
									var	id=5;
									alert('Data Berhasil Diubah!');
									window.location='breedingManagemen.php?id='+id;
								</script>
							<?php
							// echo
							// "<script type='text/javascript'>
							//                               alert('data berhasil diubah Berhasil! ');
							//                               window.location='breedingManagemen.php?id='.<?php $id=3?</script>";


						}else{
							echo "string";
						}



				}else{


					$kode=rand(100,300);
								$fotobaru='ternak'.$kode.$foto;
								
								$path = "../asset/img/burung/".$fotobaru;
								if (move_uploaded_file($tmp, $path)) {
									$query1="SELECT image FROM ternak WHERE id_ternak='$idTernak'";
         							$result1=mysqli_query($db,$query1);
         							$data1=mysqli_fetch_array($result1);
         							if(is_file("../asset/img/burung/".$data1['image']))
               						unlink("../asset/img/burung/".$data1['image']);


									$query="UPDATE ternak SET nama_burung='$namaBurung', id_induk='$idInduk', tgl_menetas='$tgl', warna='$warna', gender='$gender', ring='$ring', image='$fotobaru', keterangan='$ket' WHERE id_ternak='$idTernak'";
									$result=mysqli_query($db,$query);
											if ($result) {?>
												<script type="text/javascript">
												var	id=5;
												alert('Data Berhasil Diubah!');
												window.location='breedingManagemen.php?id='+id;
												</script>

									<?php
										}else{
											echo "string";
										}


								}



				}	





		
	}
}