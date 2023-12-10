<?php 

include "../koneksi.php";
if (isset($_POST['simpan_beli_burung'])) {
					$tgl=$_POST['tgl'];
						$jumlah=$_POST['jml'];
						
						$nama=$_POST['nama_burung'];
						$warna=$_POST['warna'];
						$gender=$_POST['gender'];
						$blood=$_POST['blood'];
						$ring=$_POST['ring'];
						$harga=$_POST['harga'];
						$ket=$_POST['ket'];
						for ($i=0; $i < $jumlah ; $i++) { 

								$query="INSERT INTO finance SET "

						}
						
	

}


?>

<!-- <script type="text/javascript">
var	id=<?php echo 	$jumlah?>;
alert('Kode Burung Sudah Ada!');
window.location='jumlah_beli_burung.php?jmlh='+id;
</script> -->

<?php