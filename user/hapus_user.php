<?php 
include "../koneksi.php";
if(isset($_GET['id_user'])){

		$iduser=$_GET['id_user'];

		 
		
			$query="DELETE FROM user WHERE id_user='$iduser'";
				$result=mysqli_query($db,$query);
											if ($result){
                echo "<script type='text/javascript'>
                alert('Data Berhasil Dihapus !');window.location='data_user.php'</script>";
										}else{
											echo "<script type='text/javascript'>
                                                alert('Gagal !');window.location='data_user.php'</script>";
										}


}
