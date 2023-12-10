<?php include "../header/header.php"?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profil</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content ">
      <div class="container-fluid">

        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">

                <form method="POST" action="simpan_profil.php">
                  <input type="hidden" name="id_breeder" value="<?=$peternakan['id_breeder']?>">
                    <div class="form-group">
                      <label>Nama Peternakan :</label>
                      <input type="text" name="nama_peternakan" class="form-control" value="<?= $peternakan['nama_peternakan']?>" placeholder="Nama Peternakan" required readonly>
                    </div>
                    <div class="form-group">
                      <label>Nama Pemilik : </label>
                      <input type="text" name="nama_pemilik" class="form-control" value="<?= $peternakan['nama_pemilik']?>" placeholder="Nama Pemilik" required readonly>
                    </div>
                    <div class="form-group">
                      <label>Alamat : </label>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Alamat" name="alamat" required readonly><?= $peternakan['alamat']?></textarea>
                      
                    </div>
                    <div class="form-group">
                      <label>Nomor Telepon</label>
                      <input type="number" name="no_hp" class="form-control" value="<?= $peternakan['no_hp']?>" placeholder="Nomor Telepon" required readonly>
                    </div>

                    <!-- <input type="submit" name="simpan_edit_profil" class="btn btn-info" value="Simpan"> -->
                </form>

              </div>

              
            </div>
              
          </div>
          
        </div>

      
    </div><!-- /.container-fluid -->
  </section>
  
    <!-- /.content -->
<?php include "../footer/footer.php";?>