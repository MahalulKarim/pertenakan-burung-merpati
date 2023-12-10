
<?php include "../header/header_admin.php";

if (isset($_GET['id_induk'])) {
	$idInduk=$_GET['id_induk'];

	$query="SELECT * FROM induk WHERE id_induk='$idInduk'";
	$result=mysqli_query($db,$query);
	if (mysqli_num_rows($result)<1) {
		echo "Not Faound!";
	}else{
		$data=mysqli_fetch_array($result);
	}
	
}


?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Induk</h1>
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
            	<div class="card-header bg-primary">

            		<h3 class="card-title"><button type="button" onclick="history.back(-1)" class="btn btn-danger">Kembali</button></h3>
            	</div>
              <div class="card-body">
              	<form method="POST" action="simpan_management.php">
                  <input type="hidden" name="id_induk" value="<?php echo $data['id_induk']?>">
                    <div class="row ">
                       <div class="col-lg-6 ">
                            <div class="form-group">
                            <label>Tgl Register  :</label>
                            <input type="date" name="tgl" class="form-control" required="" value="<?php echo $data['tgl_reg']?>">
                            
                          </div>
                      </div>
                      <div class="col-lg-6 ">
                           <div class="form-group">
                            <label>Kode  :</label>
                              <input type="text" name="kode" class="form-control" required="" placeholder="Kode Induk" value="<?php echo $data['kode']?>">
                            
                          </div>
                      </div>
                      <div class="col-lg-6 ">
                            <div class="form-group">
                            <label>Betina  :</label>
                            <select name="id_betina" class="form-control">
                              <?php
                               
                                  $query2="SELECT * FROM burung WHERE gender='betina'";
                                  $result2=mysqli_query($db,$query2);
                                  while($data2=mysqli_fetch_array($result2)){
                                      if ($data['id_betina']==$data2['id_burung']) {?>

                                        <option value="<?= $data2['id_burung']?>" selected><?php echo $data2['nama']." [".$data2['kode']."]"?></option>

                                        <?php
                                        # code...
                                      }else{?>
                                        <option value="<?= $data2['id_burung']?>"><?php echo $data2['nama']." [".$data2['kode']."]"?></option>
                                     <?php }
                                    ?>
                                      
                              <?php
                                  }
                              ?>
                            </select>
                            
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                            <label>Jantan  :</label>
                            <select name="id_jantan" class="form-control">
                              <?php
                                  
                                  $query3="SELECT * FROM burung WHERE gender='jantan'";
                                  $result3=mysqli_query($db,$query3);
                                  while($data3=mysqli_fetch_array($result3)){
                                    if ($data['id_jantan']==$data3['id_burung'])  {?>

                                        <option value="<?= $data3['id_burung']?>" selected><?php echo $data3['nama']." [".$data3['kode']."]"?></option>

                                        <?php
                                        # code...
                                      }else{?>
                                        <option value="<?= $data3['id_burung']?>"><?php echo $data3['nama']." [".$data3['kode']."]"?></option>
                                     <?php }
                                    ?>
                              <?php
                                  }
                              ?>
                            </select>
                            
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label>Nama :</label>
                          <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $data['nama']?>">
                        </div>
                      </div>
                       <div class="col-lg-6">
                        <div class="form-group">
                          <label>Keterangan :</label>
                          <textarea class="form-control" name="ket" placeholder="Tulis Disini"><?php echo $data['ket']?></textarea>
                        </div>
                      </div>
                      
                    </div>
                    
                      
                    
                      <button type="submit" name="simpan_edit_induk" class="btn btn-info">Simpan</button>
                    </form>
                        </div>
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