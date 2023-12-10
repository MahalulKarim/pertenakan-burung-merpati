<?php 
date_default_timezone_set("Asia/Jakarta");


session_start();

include "../koneksi.php"; 
if ($_SESSION['status']!="login") {
    header("location:../index.php?pesan=belumlogin");

}else{

$email = $_SESSION['email'];
 $cariuser="SELECT * FROM breeder WHERE email='$email'";
$cari=mysqli_query($db, $cariuser);
if(mysqli_num_rows($cari)<1){
  echo "NOt found";
}else{
  $user=mysqli_fetch_array($cari);
}

}


?>