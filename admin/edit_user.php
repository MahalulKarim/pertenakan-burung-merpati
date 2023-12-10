

<?php include "../header/header_admin.php";
if (isset($_GET['id'])) {
    $id=$_GET['id'];

    $query="SELECT * FROM user WHERE id_user='$id'";
    $result=mysqli_query($db,$query);
    if (mysqli_num_rows($result)<1) {
        echo "NOT FOUND!";
    }else{
        $data=mysqli_fetch_array($result);

    }



?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit User</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content ">
      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
            	<div class="card-header">
                    <a href="data_user.php" class="btn btn-danger">Kembali</a>
                </div>
                <div class="card-body">
                    
                        
                           
                            <form action="simpan_user.php" method="POST">
                            <input type="hidden" name="id_user" value="<?php echo $data['id_user']?>">
                            <input type="hidden" name="id_user2" value="<?php echo $user['id_user']?>">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama" required value="<?php echo $data['nama']?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $data['username']?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" >
                                        <small class="text-danger">(Abaikan jika tidak ingin di ubah*)</small>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">No Telp</label>
                                        <input type="number" name="no_tlp" class="form-control" placeholder="No HP/WA" required value="<?php echo $data['no_tlp']?>">
                                    </div>
                                </div>
                                <?php 
                                    if ($data['id_user']==$user['id_user']) {?>
                                                <input type="hidden" name="type" value="<?php echo $data['type']?>">
                                    <?php
                                        # code...
                                    }else{
                                ?>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Type</label>
                                        <select name="type" id="" class="form-control">
                                            <?php 
                                                if ($data['type']=='admin') {?>
                                                    <option value="admin" selected>Admin</option>
                                                    <option value="user">User</option>
                                            
                                            <?php
                                                }else{?>
                                                    <option value="admin">Admin</option>
                                                    <option value="user" selected>User</option>
                                            
                                            <?php
                                                }
                                            ?>
                                            
                                        </select>
                                        
                                    </div>
                                </div>
                                            <?php } ?>
                                <div class="col-lg-6 pt-3">
                                    <div class="form-group pt-3">                                    
                                        <button type="submit" name="simpan_edit_user" class="btn btn-info">Simpan</button>
                                    </div>
                                </div>
                            
                                </div>
                        </form>
                    
                    

                
                </div>
              
             </div>
            
            </div>
        </div>

      
    </div><!-- /.container-fluid -->
  </section>
  <?php }elseif (isset($_GET['id_admin'])) {
    $id=$_GET['id_admin'];

    $query="SELECT * FROM user WHERE id_user='$id'";
    $result=mysqli_query($db,$query);
    if (mysqli_num_rows($result)<1) {
        echo "NOT FOUND!";
    }else{
        $data=mysqli_fetch_array($result);

    }
    
    ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content ">
      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
            	<div class="card-header">
                    <a href="data_user.php" class="btn btn-danger">Kembali</a>
                </div>
                <div class="card-body">
                    
                        
                           
                            <form action="simpan_user.php" method="POST">
                            <input type="hidden" name="id_user" value="<?php echo $data['id_user']?>">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama" required value="<?php echo $data['nama']?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">No Telp</label>
                                        <input type="number" name="no_tlp" class="form-control" placeholder="No HP/WA" required value="<?php echo $data['no_tlp']?>">
                                    </div>
                                </div>
                                
                                
                                <div class="col-lg-6 pt-3">
                                    <div class="form-group pt-3">                                    
                                        <button type="submit" name="simpan_edit_admin" class="btn btn-info">Simpan</button>
                                    </div>
                                </div>
                            
                                </div>
                        </form>
                    
                    

                
                </div>
              
             </div>
            
            </div>
        </div>

      
    </div><!-- /.container-fluid -->
  </section>
<?php 

}elseif (isset($_GET['id_admin_pswd'])) {
    $id=$_GET['id_admin_pswd'];

    $query="SELECT * FROM user WHERE id_user='$id'";
    $result=mysqli_query($db,$query);
    if (mysqli_num_rows($result)<1) {
        echo "NOT FOUND!";
        }else{
            $data=mysqli_fetch_array($result);

        }


?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Username & Password</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content ">
      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
            	<div class="card-header">
                    <a href="data_user.php" class="btn btn-danger">Kembali</a>
                </div>
                <div class="card-body">
                    
                        
                           
                            <form action="simpan_user.php" method="POST">
                            <input type="hidden" name="id_user" value="<?php echo $data['id_user']?>">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="Username" required value="<?php echo $data['username']?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="password" required >
                                    </div>
                                </div>
                                
                                
                                <div class="col-lg-6 pt-3">
                                    <div class="form-group pt-3">                                    
                                        <button type="submit" name="simpan_edit_admin_password" class="btn btn-info">Simpan</button>
                                    </div>
                                </div>
                            
                                </div>
                        </form>
                    
                    

                
                </div>
              
             </div>
            
            </div>
        </div>

      
    </div><!-- /.container-fluid -->
  </section>
    <?php }?>
    <!-- /.content -->
<?php include "../footer/footer.php";?>