

<?php include "../header/header_admin.php";



?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Laporan Penjualan Ternak</h1>
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
                    <a href="tambah_user.php" class="btn btn-info">Tambah User</a>
                </div>
              <div class="card-body">
              	<div class="row">        
                        
                        
                             

                   
                        
                          
                          
                              <div class="col-lg-12">
                                    <table  id="example1" class="table table-bordered table-striped">
                                      <thead>
                                          <tr>
                                          <th>No</th>
                                          <th>Nama</th>
                                          <th>No Telp</th>
                                          <th>Type</th>
                                          <th>Aksi</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      
                                       
                                        $no=1;
                                         $query="SELECT * FROM user" ;
                                         $result=mysqli_query($db,$query);
                                        
                                              while ($data=mysqli_fetch_array($result)) {?>
                                                <tr>
                                                <td><?php echo $no++?></td>
                                                <td><?php echo $data['nama']?>
                                                
                                                    <?php 
                                                        if ($data['id_user']==$user['id_user']) {?>

                                                            <span class="text-danger"> (Akun Anda*)</span>
                                                                <?php
                                                            
                                                        }else{?>

                                                        
                                                    <?php
                                                        }
                                                    ?>
                                                </td>                                                    
                                                <td>
                                                    <?php echo $data['no_tlp'] ?>
                                                </td>        
                                                <td>
                                                    <?php echo $data['type'] ?>
                                                </td>        

                                                <td>
                                                    
                                                    <?php 
                                                        if ($data['id_user']==$user['id_user']) {?>
                                                        <a href="edit_user.php?id_admin=<?php echo $data['id_user']?>" class="btn btn-sm btn-info">Edit</a>
                                                        <a href="edit_user.php?id_admin_pswd=<?php echo $data['id_user']?>" class="btn btn-sm btn-info">Ubah Password</a>
                                                                <?php
                                                            
                                                        }else{?>
                                                        <a href="edit_user.php?id=<?php echo $data['id_user']?>" class="btn btn-sm btn-info">Edit</a>
                                                        <a href="hapus_user.php?id_user=<?php echo $data['id_user']?>" onclick="return(confirm('Yakin Hapus User?'))" class="btn btn-sm btn-danger">Hapus</a>
                                                    <?php
                                                        }
                                                    ?>
                                                   
                                                </td>
                                        </tr>
                                       
                                          <?php 
                                          }                                      
                                            
                                            ?>
                                    </tbody>
                                    </table>
                              
                              </div>

                          </div>
                          
                      
  


              		

              

              </div>

              
            </div>
              
          </div>
          
        </div>

      
    </div><!-- /.container-fluid -->
  </section>
  
    <!-- /.content -->
<?php include "../footer/footer.php";?>