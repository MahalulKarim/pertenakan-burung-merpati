<?php 
include "../koneksi.php";
if(isset($_GET['id'])){

		$id_galleri=$_GET['id'];

        $query3="SELECT * FROM galleri_pt WHERE id_galleri='$id_galleri'";
        $result3=mysqli_query($db,$query3);
        $data3=mysqli_fetch_array($result3);
        $id=$data3['id_pt'];

        
		 
		$query1="SELECT gambar FROM galleri_pt WHERE id_galleri='$id_galleri'";
        $result1=mysqli_query($db,$query1);
        $data1=mysqli_fetch_array($result1);
        if(is_file("../asset/img/burung/".$data1['gambar']))
        unlink("../asset/img/burung/".$data1['gambar']);
			$query="DELETE FROM galleri_pt WHERE id_galleri='$id_galleri'";
				$result=mysqli_query($db,$query);
											if ($result) {?>

												
												<script type="text/javascript">
												var	id=<?php echo $id?>;
												alert('Foto Burung Berhasil Dihapus!');
												window.location='detailPt.php?id='+id;
												</script>

									<?php
										}else{
											echo "string";
										}


}
