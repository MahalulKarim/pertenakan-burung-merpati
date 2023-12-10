<?php 
include "../koneksi.php";
if(isset($_GET['id_burung'])){

		$idBurung=$_GET['id_burung'];

		 
		$query1="SELECT image FROM burung WHERE id_burung='$idBurung'";
        $result1=mysqli_query($db,$query1);
        $data1=mysqli_fetch_array($result1);
        if(is_file("../asset/img/burung/".$data1['image']))
        unlink("../asset/img/burung/".$data1['image']);
			$query="DELETE FROM burung WHERE id_burung='$idBurung'";
				$result=mysqli_query($db,$query);
											if ($result) {?>

												
												<script type="text/javascript">
												var	id=3;
												alert('Data Berhasil Dihapus!');
												window.location='breedingManagemen.php?id='+id;
												</script>

									<?php
										}else{
											echo "string";
										}


}



	

// window.location=history.go(-1);