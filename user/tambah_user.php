

<?php include "../header/header_admin.php";



?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah User</h1>
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
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">No Telp</label>
                                        <input type="number" name="no_tlp" class="form-control" placeholder="No HP/WA" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Type</label>
                                        <select name="type" id="" class="form-control">
                                            <option value="admin">Admin</option>
                                            <option value="user">User</option>
                                        </select>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6 pt-3">
                                    <div class="form-group pt-3">                                    
                                        <button type="submit" name="simpan_user" class="btn btn-info">Simpan</button>
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
  
    <!-- /.content -->
<?php include "../footer/footer.php";?>