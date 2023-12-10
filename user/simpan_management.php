<?php 

include "../koneksi.php";
if (isset($_POST['simpan'])) {
	$ring=$_POST['ring'];
	 $idUser=$_POST['id_user'];
	 $query2="SELECT ring FROM burung WHERE ring='$ring'";
	 $result2=mysqli_query($db,$query2);
	 if (mysqli_num_rows($result2)<1) {
	 		 $tgl=$_POST['tgl'];
			 $nama=$_POST['nama_burung'];
			 $warna=$_POST['warna'];
			 $gender=$_POST['gender'];
			 $iJantan=$_POST['i_jantan'];
			 $iBetina=$_POST['i_betina'];
			 
			 $ket=$_POST['ket'];

			$foto=$_FILES['gambar']['name'];
			$tmp=$_FILES['gambar']['tmp_name'];
			if (empty($foto)) {
				# code...
					$query="INSERT INTO burung SET tanggal_reg='$tgl', id_user='$idUser', nama='$nama', ring='$ring', warna='$warna', gender='$gender', induk_jantan='$iJantan', induk_betina='$iBetina', keterangan='$ket'";
					$result=mysqli_query($db,$query);
					if ($result) {
						?>

									 	<script type="text/javascript">
											var	id=1;
											alert('Registrasi Berhasil!');
											window.location='breedingManagemen.php?id='+id;
										</script>

									 	<?php


					}else{
						echo "string";
					}



			}else{


				$kode=rand(100,300);
							$fotobaru=$nama.$kode.$foto;
							
							$path = "../asset/img/burung/".$fotobaru;
							if (move_uploaded_file($tmp, $path)) {

							$query="INSERT INTO burung SET tanggal_reg='$tgl', id_user='$idUser', nama='$nama', ring='$ring', warna='$warna', gender='$gender',  induk_jantan='$iJantan', induk_betina='$iBetina',image='$fotobaru', keterangan='$ket'";
							$result=mysqli_query($db,$query);
									if ($result) {
										?>

									 	<script type="text/javascript">
											var	id=1;
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
				                              alert('Gagal, kode ring burung sudah ada!');window.location=window.location=history.go(-1);</script>";
	 }

	

}elseif(isset($_POST['simpan_edit_burung'])){
		$idBurung=$_POST['id_burung'];

		$ring=$_POST['ring'];

		 $query2="SELECT * FROM burung WHERE id_burung='$idBurung' || ring='$ring'";
		 $result2=mysqli_query($db,$query2);
		 if (mysqli_num_rows($result2)>1) {
		 	echo "<script type='text/javascript'>
					                              alert('Gagal, kode ring burung sudah ada!');window.location=window.location=history.go(-1);</script>";

		 }else{
			

				 $tgl=$_POST['tgl'];
				 $nama=$_POST['nama_burung'];
				 $warna=$_POST['warna'];
				 $gender=$_POST['gender'];
				 $iJantan=$_POST['i_jantan'];
			 $iBetina=$_POST['i_betina'];
				 
				 $ket=$_POST['ket'];

				$foto=$_FILES['gambar']['name'];
				$tmp=$_FILES['gambar']['tmp_name'];
				if (empty($foto)) {
					# code...
						$query="UPDATE burung SET tanggal_reg='$tgl', nama='$nama', ring='$ring', warna='$warna', gender='$gender',  induk_jantan='$iJantan', induk_betina='$iBetina', keterangan='$ket' WHERE id_burung='$idBurung'";
						$result=mysqli_query($db,$query);
						if ($result) {?>
								<script type="text/javascript">
									var	id=3;
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
								$fotobaru=$nama.$kode.$foto;
								
								$path = "../asset/img/burung/".$fotobaru;
								if (move_uploaded_file($tmp, $path)) {
									$query1="SELECT image FROM burung WHERE id_burung='$idBurung'";
         							$result1=mysqli_query($db,$query1);
         							$data1=mysqli_fetch_array($result1);
         							if(is_file("../asset/img/burung/".$data1['image']))
               						unlink("../asset/img/burung/".$data1['image']);


									$query="UPDATE burung SET tanggal_reg='$tgl',nama='$nama', ring='$ring', warna='$warna', gender='$gender', induk_jantan='$iJantan', induk_betina='$iBetina',image='$fotobaru', keterangan='$ket' WHERE id_burung='$idBurung'";
									$result=mysqli_query($db,$query);

									
											if ($result) {?>
												<script type="text/javascript">
												var	id=3;
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







}elseif(isset($_POST['simpan_induk'])){
	$idUser=$_POST['id_user'];
	$kode=$_POST['kode'];
	$query="SELECT kode FROM induk WHERE kode='$kode'";
	$result=mysqli_query($db,$query);
	if (mysqli_num_rows($result)<1) {
		
			$tgl=$_POST['tgl'];
			$idBetina=$_POST['id_betina'];
			$idJantan=$_POST['id_jantan'];
			if (empty($_POST['nama'])) {
				$nama=$idBetina."&".$idJantan;
			}else{
				$nama=$_POST['nama'];
			}
			$ket=$_POST['ket'];

			$query1="INSERT INTO induk SET id_user='$idUser',tgl_reg='$tgl', kode='$kode', id_betina='$idBetina', id_jantan='$idJantan', nama='$nama', ket='$ket'";
			$result1=mysqli_query($db,$query1);
			if ($result1) {
				?>
								<script type="text/javascript">
									var	id=2;
									alert('Registrasi Induk Berhasil!');
									window.location='breedingManagemen.php?id='+id;
								</script>
							<?php
			}



		# code...
	}else{

		echo "<script type='text/javascript'>
				                              alert('Gagal, kode induk sudah ada!');window.location=window.location=history.go(-1);</script>";
	}


	

}elseif(isset($_POST['simpan_edit_induk'])){
	$idInduk=$_POST['id_induk'];
	$kode=$_POST['kode'];
	$query="SELECT kode FROM induk WHERE id_induk='$idInduk' || kode='$kode'";
	$result=mysqli_query($db,$query);
	if (mysqli_num_rows($result)>1) {
			echo "<script type='text/javascript'>
				                              alert('Gagal, kode induk sudah ada!');window.location=window.location=history.go(-1);</script>";
			



		# code...
	}else{

		$tgl=$_POST['tgl'];
			$idBetina=$_POST['id_betina'];
			$idJantan=$_POST['id_jantan'];
			if (empty($_POST['nama'])) {
				$nama=$idBetina."&".$idJantan;
			}else{
				$nama=$_POST['nama'];
			}
			$ket=$_POST['ket'];

			$query1="UPDATE induk SET tgl_reg='$tgl', kode='$kode', id_betina='$idBetina', id_jantan='$idJantan', nama='$nama', ket='$ket' WHERE id_induk='$idInduk'";
			$result1=mysqli_query($db,$query1);
			if ($result1) {
				?>
								<script type="text/javascript">
									var	id=4;
									alert('Data Induk Berhasil Diubah!');
									window.location='breedingManagemen.php?id='+id;
								</script>
							<?php
			}
	}


	

}
// window.location=history.go(-1);