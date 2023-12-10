<?php 

include "../koneksi.php";
if (isset($_POST['simpan_edit_profil'])) {
	$id=$_POST['id_breeder'];
	$namaPeternakan=$_POST['nama_peternakan'];
	$namaPemilik=$_POST['nama_pemilik'];
	$alamat=$_POST['alamat'];
	$noHp=$_POST['no_hp'];

	$query="UPDATE breeder SET nama_peternakan='$namaPeternakan', nama_pemilik='$namaPemilik', alamat='$alamat', no_hp='$noHp' WHERE id_breeder=$id";
	$result=mysqli_query($db,$query);
	if ($result) {
		echo

			"<script type='text/javascript'>
						                              alert('Profil Berhasil DI Ubah !');window.location='profil.php'</script>";
		
	}
}
// window.location=history.go(-1);