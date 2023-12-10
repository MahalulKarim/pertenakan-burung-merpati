<?php 

include "../header/header.php";
if (isset($_POST['simpan_penjualan'])) {
 $tgl=date("Y-m-d");
 
 $nominal=$_POST['nominal'];
 $ket=$_POST['ket'];

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Penjualan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content ">
      <div class="container-fluid">
      <div class="row">
          <div class="col-12 col-sm-12">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
              </div>
              <div class="card-body">
              <div class="row">
              <div class="col-lg-12">
              <form action="cetak_struk.php" method="POST" target="_blank">
              <p>Tanggal : <?php echo date('d-m-Y', strtotime($tgl))?></p>
              <table class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Ring</th>
                    <th>Induk</th>
                    <th>Harga</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
               
                  
<?php

      $iduser=$_POST['id_user'];
       $idTernak=$_POST['id_ternak'];
       $no=1;
       $tot=0;
       
        
       
					
						for ($i=0; $i < sizeof($idTernak) ; $i++) { 
             
       
         $query="INSERT INTO finance SET id_user='$iduser', id_pt='$idTernak[$i]', tgl_transaksi='$tgl', nominal='$nominal[$i]', keterangan='$ket'";
         $result=mysqli_query($db,$query);
         if ($result) {
          $query2="UPDATE ternak SET status=1 WHERE id_ternak='$idTernak[$i]'";
          $result2=mysqli_query($db,$query2);
          if ($result2) {
             $query3="SELECT t.*,i.nama FROM ternak t, induk i  WHERE i.id_induk=t.id_induk AND  t.id_ternak='$idTernak[$i]'";
             $result3=mysqli_query($db,$query3);
             $data3=mysqli_fetch_array($result3);
           
           ?>
           <tr>
             <td><?php echo $no++  ?></td>      
             <td><?php  echo $data3['ring'] ?></td>      
             <td><?php  echo $data3['nama'] ?></td>      
             <td>Rp. <?php echo number_format($nominal[$i]) ?></td>  
             <!--  -->
            
             <td> 
             
              <a href="sertifikat.php?id_ternak=<?php echo $data3['id_ternak']?>" class="btn btn-success" target="_blank">Cetak Sertifikat</a>
           

            </td>    
           </tr>
             
          
                                
               <input type="hidden" name="ring[]" value="<?php echo $data3['ring']?>">           
               <input type="hidden" name="nama[]" value="<?php echo $data3['nama']?>">           
               <input type="hidden" name="nominal[]" value="<?php echo $nominal[$i]?>">           
            
              
            
        
















 <?php   }

         }
          $tot+=$nominal[$i];
        
      }
      
      ?>
        <tr>
         <td></td>
         <td></td>
         <td></td>
          <td><strong>Total</strong></td>
          <td><strong>Rp. <?php echo number_format($tot)?></strong></td>
          <td>
          <input type="hidden" name="tot" value="<?php echo $tot?>">
          <input type="hidden" name="farm" value="<?php echo $peternakan['nama_peternakan']?>">
          <input type="hidden" name='tgl' value="<?php echo $tgl?>">
          <input type="hidden" name="total" value="<?php echo $tot?>">
          <button class="btn btn-info" name="cetak_struk">Cetak Struk</button>
          
          
          
          </td>
        </tr>
         </tbody>
              
              </table>
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
  <?php
						
	
    
}


include "../footer/footer.php";?>