<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bird Farm</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="asset/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="asset/dist/css/adminlte.min.css">
</head>
<body>
  

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content ">
      <div class="container-fluid">

        <div class="row d-flex justify-content-center pt-3">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-header bg-primary">
                  <h3 class="card-title">
                      Register
                  </h3>
              </div>
              <div class="card-body">
                <form method="POST" action="simpan_daftar.php">
                  <div class="form-group">
                      <label>Nama Pemilik : </label>
                      <input type="text" name="nama_pemilik" class="form-control"  placeholder="Nama Pemilik" required>
                    </div>
                    <div class="form-group">
                      <label>Nama Peternakan :</label>
                      <input type="text" name="nama_peternakan" class="form-control"  placeholder="Nama Peternakan" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Alamat : </label>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Alamat" name="alamat" required=""></textarea>
                      
                    </div>
                    <div class="form-group">
                      <label>Nomor Telepon</label>
                      <input type="number" name="no_hp" class="form-control" placeholder="Nomor Telepon" required>
                    </div>
                     <div class="form-group">
                      <label>Email : </label>
                      <input type="email" name="email" class="form-control"  placeholder="ex: birdfarm@mail.com" required>
                    </div>
                     <div class="form-group">
                      <label>Password : </label>
                      <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <input type="submit" name="simpan_daftar" class="btn btn-info" value="Daftar">
                </form>

              </div>

              
            </div>
              
          </div>
          
        </div>

      
    </div><!-- /.container-fluid -->
  </section>
  
    <!-- /.content -->
</body>
