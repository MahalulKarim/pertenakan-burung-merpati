<?php include "../header/header_admin.php"?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
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
          <div class="col-lg-3 col-12">
            <!-- small box -->
            <div class="card bg-info" style="height:10rem">
              <div class="card-body">
                <h3 class="card-text">
                  Breeder Profil
                </h3>
                <h5>
                <?php echo $peternakan['nama_peternakan']?>
                </h5>
              </div>
              <div class="card-footer">
                <a href="profil.php" class="btn btn-info btn-sm btn-block">
                   More info <i class="fas fa-arrow-circle-right"></i>
                </a>
               
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-12">
            <!-- small box -->
            <div class="card bg-info" style="height:10rem">
              <div class="card-body">
                <h3 class="card-text">
                  Breeding Managgement
                </h3>
              </div>
              <div class="card-footer">
                <a href="breedingManagemen.php" class="btn btn-info btn-sm btn-block">
                   More info <i class="fas fa-arrow-circle-right"></i>
                </a>
               
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-12">
            <!-- small box -->
            <div class="card bg-info" style="height:10rem">
              <div class="card-body">
                <h3 class="card-text">
                 Galleri
                </h3>
              </div>
              <div class="card-footer">
                <a href="galleri.php" class="btn btn-info btn-sm btn-block">
                   More info <i class="fas fa-arrow-circle-right"></i>
                </a>
               
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-12">
            <!-- small box -->
            <div class="card bg-info" style="height:10rem">
              <div class="card-body">
                <h3 class="card-text">
                  Finance
                </h3>
              </div>
              <div class="card-footer">
                <a href="data_finance.php" class="btn btn-info btn-sm btn-block">
                   More info <i class="fas fa-arrow-circle-right"></i>
                </a>
               
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-12">
            <div class="card bg-info" style="height:">
              <div class="card-header">
                <h5 class="text-center">Jumlah Burung</h5>
              </div>
              <div class="card-body">
                <h1 class="card-text text-center">
                  <?php 
                    $query="SELECT count(*) as total_burung FROM burung";
                    $reult=mysqli_query($db,$query);
                    $totalBurung=mysqli_fetch_array($reult);
                    echo $totalBurung['total_burung'];
                  ?>
                </h1>
              </div>
              <div class="card-footer">
                <a href="breedingManagemen.php?id=3" class="btn btn-info btn-sm btn-block">
                   More info <i class="fas fa-arrow-circle-right"></i>
                </a>
               
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-12">
            <div class="card bg-primary" style="height:">
              <div class="card-header">
                <h5 class="text-center">Jumlah Induk Burung</h5>
              </div>
              <div class="card-body">
                <h1 class="card-text text-center">
                  <?php 
                    $query1="SELECT count(*) as total_induk FROM induk";
                    $reult1=mysqli_query($db,$query1);
                    $totalInduk=mysqli_fetch_array($reult1);
                    echo $totalInduk['total_induk'];
                  ?>
                </h1>
              </div>
              <div class="card-footer">
                  <a href="breedingManagemen.php?id=4" class="btn btn-primary btn-sm btn-block">
                     More info <i class="fas fa-arrow-circle-right"></i>
                  </a>
                 
                </div>
            </div>
          </div>
         
          <div class="col-lg-3 col-12">
            <div class="card bg-warning" style="height:">
              <div class="card-header">
                <h5 class="text-center">Jumlah Produk Ternak</h5>
              </div>
              <div class="card-body">
                <h1 class="card-text text-center">
                  <?php 
                    $query2="SELECT count(*) as total_ternak FROM ternak";
                    $reult2=mysqli_query($db,$query2);
                    $totalTernak=mysqli_fetch_array($reult2);
                    echo $totalTernak['total_ternak'];
                  ?>
                </h1>
              </div>
              <div class="card-footer">
                  <a href="breedingManagemen.php?id=5" class="btn btn-warning btn-sm btn-block">
                     More info <i class="fas fa-arrow-circle-right"></i>
                  </a>
                 
                </div>
            </div>
          </div>
          <div class="col-lg-3 col-12">
            <div class="card bg-success" style="height:">
              <div class="card-header">
                <h5 class="text-center">Jumlah Ternak Terjual</h5>
              </div>
              <div class="card-body">
                <h1 class="card-text text-center">
                  <?php 
                    $query3="SELECT count(*) as total_ternak FROM ternak WHERE status='1'";
                    $reult3=mysqli_query($db,$query3);
                    $totalTernak=mysqli_fetch_array($reult3);
                    echo $totalTernak['total_ternak'];
                  ?>
                </h1>
              </div>
              <div class="card-footer">
                    <a href="breedingManagemen.php?id=5" class="btn btn-success btn-sm btn-block">
                       More info <i class="fas fa-arrow-circle-right"></i>
                    </a>                 
              </div>
            </div>
          </div>

          
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  
    <!-- /.content -->
<?php include "../footer/footer.php";?>