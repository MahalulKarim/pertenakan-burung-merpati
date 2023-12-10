

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
            	
              <div class="card-body">
              	<div class="row">        
                        <div class="col-lg-3">
                            <form action="#" method="GET">
                                <div class="input-group">
                                <span class="input-group-append">
                                    <a href="data_laporan.php" class="btn btn-success btn-flat"><i class="fas fa-undo"></i></a>
                                  </span>
                                  <input type="date" name="tgl1" class="form-control" required>
                                </div>                              
                        </div>
                        <div class="col-1">
                          <p class="text-center">s/d</p>
                        </div>
                        <div class="col-lg-3">                              
                                <div class="input-group">
                                  <input type="date" name="tgl2" class="form-control" required>
                                  <span class="input-group-append">
                                    <button type="sumbit" name="cari" class="btn btn-info btn-flat"><i class="fas fa-search"></i></button>
                                  </span>
                              </form>
                                </div>
                        </div>      

                    </div>
                        <?php 
                      if (isset($_GET['cari'])) {
                          $tgl1=$_GET['tgl1'];
                          $tgl2=$_GET['tgl2'];?>
                          
                          <div class="row pt-4">
                              <div class="col-lg-12">
                              <h6>Laporan Penjualan Ternak Dari Tgl <?php echo date('d-m-Y',strtotime($tgl1))?> s/d <?php echo date('d-m-Y',strtotime($tgl2))?></h6>
                                    <table  id="example1" class="table table-bordered table-striped">
                                      <thead>
                                          <tr>
                                          <th>No</th>
                                          <th>Ring Ternak</th>
                                          <th>Tgl Transaksi</th>
                                          <th>Total</th>
                                          <th>User</th>
                                          <th>Aksi</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      
                                       $total=0;
                                        $no=1;
                                         $query="SELECT f.*, t.ring,u.nama as name FROM finance f, ternak t, user u WHERE f.tgl_transaksi BETWEEN '$tgl1' AND '$tgl2' AND u.id_user=f.id_user AND t.id_ternak=f.id_pt" ;
                                         $result=mysqli_query($db,$query);
                                         
                                        
                                              while ($data=mysqli_fetch_array($result)) {
                                                $total+=$data['nominal'];
                                                ?>
                                                <tr>
                                                <td><?php echo $no++?></td>
                                                <td><?php echo $data['ring']?></td>
                                                
                                                <td><?php echo date('d-m-Y',strtotime($data['tgl_transaksi']))?></td>
                                                <td>Rp. 
                                                <?php 
                                        
                                                  echo number_format($data['nominal']);
                                                ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['name'] ?>
                                                </td>         
                                                <td>
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default<?php echo $data['id_transaksi']?>">
                                                Ket
                                                </button>
                                                </td>
                                        </tr>
                                         <!-- Modal  -->
                                            <div class="modal fade" id="modal-default<?php echo $data['id_transaksi']?>">
                                                <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h4 class="modal-title">Keterangan</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php echo $data['keterangan'] ?>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                                <!--Modal End  -->
                                          <?php 
                                          }                                      
                                            
                                            ?>

                                            <tr>
                                            <th colspan="3" class="text-right">Jumlah Burung Terjual</th>
                                              <th>
                                                <?php 
                                                
                                                echo $count=mysqli_num_rows($result);?>
                                              </th>
                                              <td></td>
                                              <td></td>
                                            </tr>
                                            <tr>
                                              <th colspan="3" class="text-right">Total</th>
                                              <th>
                                                Rp. 
                                                <?php 
                                                
                                                echo number_format($total);?>
                                              </th>
                                              <td></td>
                                              <td></td>
                                            </tr>
                                    </tbody>
                                    </table>
                              
                              </div>

                          </div>
                          <div class="col-lg-12 pt-2">
                              <form action="cetak_laporan_pemesanan.php" method="POST" target="_blank">
                                    <input type="hidden" name="">
                                   
                                    <!-- <button type="submit" name="cetak_laporan" class="btn btn-info">Cetak</button> -->
                              </form>
                          
                          
                          </div>
                      
                      <?php
                      }
                    
                    ?>
                    


              		

              

              </div>

              
            </div>
              
          </div>
          
        </div>

      
    </div><!-- /.container-fluid -->
  </section>
  
    <!-- /.content -->
<?php include "../footer/footer.php";?>