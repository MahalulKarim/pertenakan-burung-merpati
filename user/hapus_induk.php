<?php 
include "../koneksi.php";
if(isset($_GET['id_induk'])){

		$idInduk=$_GET['id_induk'];

		 
		
			$query="DELETE FROM induk WHERE id_induk='$idInduk'";
				$result=mysqli_query($db,$query);
											if ($result) {?>

												
												<script type="text/javascript">
												var	id=4;
												alert('Data Berhasil Dihapus!');
												window.location='breedingManagemen.php?id='+id;
												</script>

									<?php
										}else{
											echo "string";
										}


}

