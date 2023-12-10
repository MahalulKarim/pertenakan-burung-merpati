<?php include "../header/header_admin.php";?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Galleri</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content ">
      <div class="container-fluid">

        <!-- KONTEN -->
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12 mb-2 pt-2">
            <h6>Produk Ternak</h6>
          </div>
          <div class="col-12 mb-4">
            <div class="row">
              <div class="col-3">
                 <form method="GET">
                  <div class="input-group">
                    <input type="text" name="cari" class="form-control">
                    <button type="submit" name="car" class="btn btn-info"><i class="fas fa-search"></i></button>
                  </div>
                </form>
              </div>
            </div>
           
          </div>
          <?php 
            if (isset($_GET['car'])) {
              $nama=$_GET['cari'];
               $query="SELECT * FROM ternak WHERE nama_burung like '%".$nama."%'";
            }else{
               $query="SELECT * FROM ternak ";
            }

         
                $result=mysqli_query($db,$query);
                while ($data=mysqli_fetch_array($result)) {?>

          <div class="col-lg-3 col-12">
            <!-- small box -->
            <a href="detailPt.php?id=<?php echo $data['id_ternak']?>" class="text-dark">
            <div class="card " >
              <div class="card-body p-3">
                <h3 class="card-text">
                  <img src="../asset/img/burung/<?php echo $data['image']?>" alt="Burung" class="img-thumbnail" style="height:180px;width:220px;">
                </h3>
              </div>
              <div class="card-footer">
                <table>
                  <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td><?php echo $data['nama_burung']?></td>
                  </tr>
                  <tr>
                    <th>Gender</th>
                    <td>:</td>
                    <td><?php echo $data['gender']?></td>
                  </tr>
                 
                </table>
               
               
              </div>
            </div>
                </a>
          </div>

           <?php     }

          ?>
          
         
         
          <!-- ./col -->
        </div>
     
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  
    <!-- /.content -->
<?php include "../footer/footer.php";?>