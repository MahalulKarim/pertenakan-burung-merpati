<?php 

include "../koneksi.php";
if (isset($_POST['simpan'])) {
	 $id_ternak=$_POST['id_ternak'];
	 $foto=$_FILES['foto']['name'];
	 $tmp=$_FILES['foto']['tmp_name'];
	 
	 $kode=rand(100,300);
	 $fotobaru=$kode.$foto;
	 
	 $path = "../asset/img/burung/".$fotobaru;
	 if (move_uploaded_file($tmp, $path)) {

	 $query="INSERT INTO galleri_pt SET id_pt='$id_ternak', gambar='$fotobaru'";
	 $result=mysqli_query($db,$query);
			 if ($result) {
				 ?>

				  <script type="text/javascript">
					 var	id=<?php echo $id_ternak?>;
					 alert('Foto Berhasil Disimpan!');

					 window.location='detailPt.php?id='+id;
				 </script>

				  <?php
				 


			 }else{
				 echo "string";
			 }


	 }

}elseif(isset($_POST['simpan_edit'])) {
	$id_galleri=$_POST['id_galleri'];
	$id_ternak=$_POST['id_ternak'];
	$foto=$_FILES['foto']['name'];
	$tmp=$_FILES['foto']['tmp_name'];
	
	$kode=rand(100,300);
	$fotobaru=$kode.$foto;
	
	$path = "../asset/img/burung/".$fotobaru;
	if (move_uploaded_file($tmp, $path)) {
		$query1="SELECT gambar FROM galleri_pt WHERE id_galleri='$id_galleri'";
         							$result1=mysqli_query($db,$query1);
         							$data1=mysqli_fetch_array($result1);
         							if(is_file("../asset/img/burung/".$data1['gambar']))
               						unlink("../asset/img/burung/".$data1['gambar']);

	$query="UPDATE galleri_pt SET gambar='$fotobaru' WHERE  id_galleri='$id_galleri'";
	$result=mysqli_query($db,$query);
			if ($result) {
				?>

				 <script type="text/javascript">
					var	id=<?php echo $id_ternak?>;
					alert('Foto Berhasil Diubah!');

					window.location='detailPt.php?id='+id;
				</script>

				 <?php
				


			}else{
				echo "string";
			}


	}

}


