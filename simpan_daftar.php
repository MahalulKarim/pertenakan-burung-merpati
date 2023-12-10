<?php 

include "koneksi.php";
if (isset($_POST['simpan_daftar'])) {

	$email=$_POST['email'];

	$query="SELECT email FROM breeder WHERE email='$email'";
	$result=mysqli_query($db,$query);
	if (mysqli_num_rows($result)<1) {
		$namaPeternakan=$_POST['nama_peternakan'];
		$password=md5($_POST['password']);
		$namaPemilik=$_POST['nama_pemilik'];
		$alamat=$_POST['alamat'];
		$noHp=$_POST['no_hp'];
		$query2="INSERT INTO breeder  SET email='$email', password='$password', nama_peternakan='$namaPeternakan', nama_pemilik='$namaPemilik', alamat='$alamat', no_hp='$noHp'";
		$result2=mysqli_query($db,$query2);
		if ($result2) {
			echo 
			"<script type='text/javascript'>
				alert('Pendaftaran Berhasil!, Silahkan Login');window.location='index.php'
				</script>";
		}else{
			echo "string";
		}


		# code...
	}else{
		echo

			"<script type='text/javascript'>
				alert('Pendaftaran Gagal!, Email Telah Terdaftar');window.location=history.go(-1);
				</script>";
	}


}