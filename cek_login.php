<?php
include "koneksi.php";
if (isset($_POST['login'])) {
    $username   = $_POST['username'];
    $password   = md5($_POST['password']);

    $query = "SELECT * FROM `user` WHERE BINARY username='$username' AND password='$password'";
    $result = mysqli_query($db, $query);
    // $data=mysqli_fetch_array($result);  
    if (mysqli_num_rows($result)<1) {
        # code...
        header("location:index.php?pesan=gagal");
    }else{
         $data=mysqli_fetch_array($result);
         
         if ($data['type']=='admin') {
             
            session_start();
            $_SESSION['username']=$data['username'];
            $_SESSION['status']="login";
            $_SESSION['type']="admin";
            header("location:admin/index.php");
         }else{
            session_start();
            $_SESSION['username']=$data['username'];
            $_SESSION['status']="login";
            $_SESSION['type']="user";
            header("location:user/index.php");
         }
        
    }
   


}
         
               
         