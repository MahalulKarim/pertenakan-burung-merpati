
<?php include "../header/header.php";

if (isset($_GET['id_burung'])) {
	$idBurung=$_GET['id_burung'];

	$query="SELECT * FROM burung WHERE id_burung='$idBurung'";
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
            <h1 class="m-0">Edit Burung</h1>
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
                          <form method="POST" action="simpan_management.php" enctype="multipart/form-data">
                          	<input type="hidden" name="id_burung" value="<?php echo $data['id_burung']?>">
                           <div class="form-group">
                              <label>Tanggal Registrasi :</label>
                              <input type="date" name="tgl" class="form-control" placeholder="" required="" value="<?php echo $data['tanggal_reg']?>">
                            </div>
                            <div class="form-group">
                              <label>Ring :</label>
                              <input type="text" name="ring" class="form-control" placeholder="Ring" required="" value="<?php echo $data['ring']?>">
                            </div>
                             <div class="form-group">
                              <label>Nama Burung :</label>
                              <input type="text" name="nama_burung" class="form-control" placeholder="Nama Burung" required="" value="<?php echo $data['nama']?>">
                            </div>
                            <div class="form-group">
                              <label>Warna :</label>
                              <input type="text" name="warna" class="form-control" placeholder="Warna" required="" value="<?php echo $data['warna']?>">
                            </div>
                            <div class="form-group">
                              <label>Gender :</label>

                            </div>
                            <div class="form-group" style="margin-top: -20px">

                            	<?php if ($data['gender']==='jantan') {?>
                            <input type="radio" name="gender" value="jantan" required style=" margin-right:5px" checked="">Jantan
                              <input type="radio" name="gender" value="betina" required style="margin-left:10px; margin-right:5px">Betina


                            <?php		# code..
                            	}else{?>
 								<input type="radio" name="gender" value="jantan" required style=" margin-right:5px">Jantan
                              	<input type="radio" name="gender" value="betina" required style="margin-left:10px; margin-right:5px" checked="">Betina


                            	<?php } ?>
                             
                            </div>
                          </div>
                          <div class="col-lg-6">
                          <div class="form-group">
                              <label>Induk Jantan :</label>
                              <input type="text" name="i_jantan" class="form-control" placeholder="Induk Jantan" required="" value="<?php echo $data['induk_jantan']?>">
                            </div>
                            <div class="form-group">
                              <label>Induk Betina :</label>
                              <input type="text" name="i_betina" class="form-control" placeholder="Induk Betina" required="" value="<?php echo $data['induk_betina']?>">
                            </div>

                            <div class="form-group">
                              <label for="exampleInputFile">Gambar :</label>
                             </div>
                             <div class="form-group">
                             	<img src="../asset/img/burung/<?php echo $data['image']?>" class="img-thumbnail" width="200px" alt="Burung" id="blah">
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
                          <input type="submit" name="simpan_edit_burung" class="btn btn-info" value="Simpan">
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