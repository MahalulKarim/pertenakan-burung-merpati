<?php 
include "../koneksi.php";
if(isset($_GET['id_ternak'])){

		$idTernak=$_GET['id_ternak'];

		 
		$query1="SELECT image FROM ternak WHERE id_ternak='$idTernak'";
        $result1=mysqli_query($db,$query1);
        $data1=mysqli_fetch_array($result1);
        if(is_file("../asset/img/burung/".$data1['image']))
        unlink("../asset/img/burung/".$data1['image']);
			$query="DELETE FROM ternak WHERE id_ternak='$idTernak'";
				$result=mysqli_query($db,$query);
											if ($result) {?>

												
												<script type="text/javascript">
												var	id=5;
												alert('Data Berhasil Dihapus!');
												window.location='breedingManagemen.php?id='+id;
												</script>

									<?php
										}else{
											echo "string";
										}


}
