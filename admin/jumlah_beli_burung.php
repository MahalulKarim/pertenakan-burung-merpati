<?php include "../header/header_admin.php";
if (isset($_GET['jmlh'])) {
   $jmlh=$_GET['jmlh'];
   $tgl=date('Y-m-d');
   
?>


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Masukan Data Pembelian burung</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content ">
      <div class="container-fluid">

        <!-- ./row -->
        <div class="row">
          <div class="col-12">
            <div class="card card-primary ">
              <div class="card-header">
                <button onclick="history.back(-1)" class="btn btn-danger">Batal</button>
              </div>
              <div class="card-body">
              
           
              	<div class="row p-4">
               <div class="col-lg-12">
               <form method="POST" action="simpan_finance.php" enctype="multipart/form-data">
               <input type="hidden" name="jml" value="<?= $jmlh?>">
               <input type="hidden" name="tgl" value="<?= $tgl?>">
               <?php 
               $a=0;
               for ($i=0; $i <$jmlh ; $i++) { 
                $a++;
                ?>
               
               <hr style="border:1px solid blue">
              		 
                   <h3 class="pt-2">Data Burung Ke <?= $a;?></h3>
                        
                          
                          
                            <div class="form-group">
                              <label>Kode Burung :</label>
                              <input type="text" name="kode_burung[]" class="form-control" placeholder="Kode Burung" required="">
                              
                            </div>
                             <div class="form-group">
                              <label>Nama Burung :</label>
                              <input type="text" name="nama_burung[]" class="form-control" placeholder="Nama Burung" required="" >
                            </div>
                            <div class="form-group">
                              <label>Warna :</label>
                              <input type="text" name="warna[]" class="form-control" placeholder="Warna" required="" >
                            </div>
                            <div class="form-group">
                              <label>Gender :</label>

                          

                            	<select name="gender[]" id="" class="form-control">
                              <option value="jantan">Jantan</option>
                              <option value="betina">Betina</option>
                             </select>
                          

                            </div>
                          
                          
                            <div class="form-group">
                              <label>Blood Line :</label>
                              <input type="text" name="blood[]" class="form-control" placeholder="Blood line" required="" >
                            </div>

                            
                             <div class="form-group">
                             <label for="">Gambar : </label>
                              <div class="input-group">
                                  <input type="file" name="gambar[]" class="form-control" id="exampleInputFile">                             
                               
                              </div>
                            </div>
                            <div class="form-group">
                              <label>Ring :</label>
                              <input type="text" name="ring[]" class="form-control" placeholder="Ring" required="" >
                            </div>
                            <div class="form-group">
                              <label>Harga :</label>
                              <input type="number" name="harga[]" class="form-control" placeholder="Ex: 200000" required="" >
                              <small class="text-danger">(Masukan Tanpa Tanda Baca)*</small>
                            </div>
                            <div class="form-group">
                              <label>Keterangan :</label>
                            </div>
                            <div class="form-group">
                              <textarea class="form-control" name="ket[]" rows="5" placeholder="Tulis Disini"></textarea>
                            </div>
                        



                        <?php    }
              
              ?>
              </div>  
                        <div class="col-12">
                          <input type="submit" name="simpan_beli_burung" class="btn btn-info" value="Simpan">
                          </form>
                        </div>
                                        
              		

              	</div>
              

              </div>

              <!-- /.card -->
            </div>
          </div>
          
        </div>

      
    </div><!-- /.container-fluid -->
  </section>
  
    <!-- /.content -->
<?php include "../footer/footer.php";?>
<?php



	}else{
 



	}
	

?>