<?php 

include "../koneksi.php";
if (isset($_POST['simpan_user'])) {
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $noHP=$_POST['no_tlp'];
    $type=$_POST['type'];

    $query="INSERT INTO user SET nama='$nama', username='username', password='$password', no_tlp='$noHP', type='$type'";
    $result=mysqli_query($db,$query);
    if ($result) {
        echo   
        "<script type='text/javascript'>
        alert('Data User Berhasil Ditambahkan !');window.location='data_user.php'</script>";
    }else{
        echo "Failed!";
    }	

}elseif (isset($_POST['simpan_edit_user'])) {
    $idUser=$_POST['id_user'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $noHP=$_POST['no_tlp'];
    $type=$_POST['type'];

    


        if (empty($password)) {
            $query="UPDATE user SET nama='$nama', username='$username', no_tlp='$noHP',type='$type' WHERE id_user='$idUser'";
            $result=mysqli_query($db,$query);
            echo "<script type='text/javascript'>
            alert('Data Berhasil Diedit !');window.location='data_user.php'</script>";
            
        }else{
            $enkripsi=md5($password);
            $query="UPDATE user SET nama='$nama', username='$username', password='$enkripsi', no_tlp='$noHP',type='$type' WHERE id_user='$idUser'";
            $result=mysqli_query($db,$query);
            echo "<script type='text/javascript'>
            alert('Data Berhasil Diedit !');window.location='data_user.php'</script>";

        }




   
}elseif(isset($_POST['simpan_edit_admin'])){
    $nama=$_POST['nama'];
    $idUser=$_POST['id_user'];
    $noHP=$_POST['no_tlp'];
    $query="UPDATE user SET nama='$nama', no_tlp='$noHP' WHERE id_user='$idUser'";
    $result=mysqli_query($db,$query);
    if ($result) {
        echo   
        "<script type='text/javascript'>
        alert('Data Berhasil Diedit !');window.location='data_user.php'</script>";
        }else{
            echo "Failed!";
        }	
    

}elseif(isset($_POST['simpan_edit_admin_password'])){
    $idUser=$_POST['id_user'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $query="UPDATE user SET username='$username', password='$password' WHERE id_user='$idUser'";
    $result=mysqli_query($db,$query);
    if ($result) {
        echo   
        "<script type='text/javascript'>
        alert('Data Berhasil Diedit Silahkan Login Kembali!');window.location='../logout.php'</script>";
        }else{
            echo "Failed!";
        }
}
// window.location=history.go(-1);