

<?php include "../header/header.php";

if (isset($_GET['id_ternak'])) {
	$idTernak=$_GET['id_ternak'];

	$query="SELECT * FROM ternak WHERE id_ternak='$idTernak'";
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
            <h1 class="m-0">Edit Ternak</h1>
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
              	
               <div class="row">
                                  <div class="col-lg-6">
                                
                                    <form method="POST" action="simpan_ternak.php" enctype="multipart/form-data">
                                      <input type="hidden" name="id_ternak" value="<?php echo $data['id_ternak']?>">
                                     <div class="form-group">
                                        <label>Tanggal Menetas :</label>
                                        <input type="date" name="tgl" class="form-control" required="" value="<?php echo $data['tgl_menetas']?>">
                                      </div>
                                     <div class="form-group">
                                        <label>Nama :</label>
                                        <input type="text" name="nama_burung" class="form-control" value="<?php echo $data['nama_burung']?>">
                                      </div>
                                      <div class="form-group">
                                        <label>Induk : </label>
                                        <select class="form-control" name="id_induk">
                                          <?php
                                            
                                            $query5="SELECT * FROM induk";
                                            $result5=mysqli_query($db,$query5);
                                            while ($data5=mysqli_fetch_array($result5)) {
                                              if ($data['id_induk']==$data5['id_induk']) {?>

                                                   <option value="<?php echo $data5['id_induk']?>" selected>
                                                <?php echo $data5['nama'].' [Kode='.$data5['kode'].']';?>
                                                  
                                                </option>

                                                <?php
                                                # code...
                                              }else{


                                              ?>

                                              <option value="<?php echo $data5['id_induk']?>">
                                                <?php echo $data5['nama'].' [Kode='.$data5['kode'].']';?>
                                                  
                                                </option>
                                              <?php
                                               }
                                              
                                            }
                                          ?>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label>Ring :</label>
                                        <input type="text" name="ring" class="form-control" placeholder="Ring" value="<?php echo $data['ring']?>">
                                      </div>
                                      
                                      <div class="form-group">
                                        <label>Warna :</label>
                                        <input type="text" name="warna" class="form-control" placeholder="Warna" value="<?php echo $data['warna']?>">
                                      </div>
                                      <div class="form-group">
                                        <label>Gender :</label>
                                      </div>
                                      <div class="form-group" style="margin-top: -20px">
                                        <?php
                                          if ($data['gender']=='jantan') {?>
                                            <input type="radio" name="gender" value="jantan" required checked style=" margin-right:5px">Jantan
                                          <input type="radio" name="gender" value="betina" required style="margin-left:10px; margin-right:5px">Betina                                          
                                        <?php }else{?>

                                            <input type="radio" name="gender" value="jantan" required style=" margin-right:5px">Jantan
                                          <input type="radio" name="gender" value="betina" required checked style="margin-left:10px; margin-right:5px">Betina                                          

                                         <?php }
                                        ?>
                                        
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      
                                      <div class="form-group">
                                        <label for="exampleInputFile">Gambar :</label>
                                      </div>
                                      <div class="form-group">
                                        <img src="../asset/img/burung/<?php echo $data['image']?>" alt="Ternak" widht="150px" class="img-thumbnail" id="blah">
                                      </div>
                                      <div class="form-group">

                                        <div class="input-group">
                                            <input type="file" name="gambar" class="form-control" id="exampleInputFile" onchange="readURL(this);">
                                       
                                         
                                        </div>
                                      </div>
                                     
                                      <div class="form-group">
                                        <label>Keterangan :</label>
                                      </div>
                                      <div class="form-group">
                                        <textarea class="form-control" name="ket" rows="5" placeholder="Tulis Disini"><?php echo $data['keterangan']?></textarea>
                                      </div>
                                  </div>

                                  <div class="col-12">
                                    <input type="submit" name="simpan_edit_ternak" class="btn btn-info" value="Simpan">
                                    </form>
                                  </div>
                                </div>

              </div>                    
              		

              	</div>
              

              </div>

              
            </div>
              
          </div>
          
        </div>

      
    </div><!-- /.container-fluid -->
  </section>
  <script>
     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
  </script>
    <!-- /.content -->
<?php include "../footer/footer.php";?>