<?php
include "../koneksi.php";
$kode=$_GET['kode_burung'];
$query="SELECT kode FROM burung WHERE kode='$kode'";
$result=mysqli_query($db,$query);
if (mysqli_num_rows($result)<1) {
 # code...
}else{
 echo "Kode Burung Sudah Ada!";
}

		