<?php include "../header/header_admin.php";?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Produk Ternak</h1>
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
          
          <?php 
            if (isset($_GET['id'])) {
              $id=$_GET['id'];
               $query="SELECT t.*,i.nama FROM ternak t, induk i WHERE i.id_induk=t.id_induk AND id_ternak='$id'";
               $result=mysqli_query($db,$query);
               if(mysqli_num_rows($result)<1){
                   echo "NO DATA!";
               }else{
                $data=mysqli_fetch_array($result);
               }
            }
            ?>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <img src="../asset/img/burung/<?php echo $data['image']?>" alt="Burung" class="img-thumbnail" style="height:220px;width:220px;">
                            </div>
                            <div class="col-6">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>:</th>
                                            <th><?php echo $data['nama_burung']?></th>
                                        </tr>
                                        <tr>
                                            <th>Ring</th>
                                            <th>:</th>
                                            <th><?php echo $data['ring']?></th>
                                        </tr>
                                        <tr>
                                            <th>Gender</th>
                                            <th>:</th>
                                            <th><?php echo $data['gender']?></th>
                                        </tr>
                                        <tr>
                                            <th>Warna</th>
                                            <th>:</th>
                                            <th><?php echo $data['warna']?></th>
                                        </tr>
                                        <tr>
                                            <th>Induk</th>
                                            <th>:</th>
                                            <th><?php echo $data['nama']?></th>
                                        </tr>
                                       
                                        <tr>
                                            <th>Keterangan</th>
                                            <th>:</th>
                                            <th><?php echo $data['keterangan']?></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-12">
                <h3 class="m-0">Galleri Foto</h3>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a data-toggle="modal" data-target="#tambah_foto" class="btn btn-primary btn-sm">Tambah Foto</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php 
                                $query2="SELECT * FROM galleri_pt WHERE id_pt='$id'";
                                $result2=mysqli_query($db,$query2);
                                while($data2=mysqli_fetch_array($result2)){?>

                            <div class="col-3">
                                <div class="card card-hover" >
                                    <div class="card-body">
                                        <h3 class="card-text">
                                            <img src="../asset/img/burung/<?php echo $data2['gambar']?>" alt="Burung" class="img-thumbnail" style="height:180px;width:220px;">
                                        </h3>
                                    </div>
                                    <div class="card-footer">
                                       <a data-toggle="modal" data-target="#edit_foto<?php echo $data2['id_galleri']?>" class="btn btn-info btn-xs" >Edit</a>
                                       <a href="hapusGalleriPt.php?id=<?php echo $data2['id_galleri']?>" class="btn btn-danger btn-xs" onclick="return(confirm('Yakin Hapus Foto Burung?'))">Hapus</a>
                                    
                                    
                                    </div>
                                </div>
                            </div>

                                     <!-- Modal  -->
                                    <div class="modal fade" id="edit_foto<?php echo $data2['id_galleri']?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Foto</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="simpanFotoPt.php" method="POST" enctype="multipart/form-data">
                                                    <input type="hidden" name="id_ternak" value="<?php echo $data2['id_pt']?>">
                                                    <input type="hidden" name="id_galleri" value="<?php echo $data2['id_galleri']?>">
                                                        <img src="../asset/img/burung/<?php echo $data2['gambar']?>" class="img-thumbnail" width="200px" alt="Burung" id="blah2">
                                                        <div class="mb-2">
                                                            <label for="">Foto</label>
                                                            <input type="file" name="foto" class="form-control" onchange="readingURL(this);" required>
                                                        </div>
                                                    
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="submit" name="simpan_edit" class="btn btn-primary">Simpan</button>
                                                    </form>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                <!--Modal End  -->
                            
                            <?php
                                    
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
           
          <div class="col-lg-3 col-12">
            <!-- small box -->
            <a href="detailPt.php?id=<?php echo $data['id_ternak']?>" class="text-dark">


            
            </a>
          </div>

            <!-- Modal  -->
            <div class="modal fade" id="tambah_foto">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Foto</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="simpanFotoPt.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_ternak" value="<?php echo $data['id_ternak']?>">
                                <img src="../asset/img/burung/<?php echo $data['image']?>" class="img-thumbnail" width="200px" alt="Burung" id="blah">
                                <div class="mb-2">
                                    <label for="">Foto</label>
                                    <input type="file" name="foto" class="form-control" onchange="readURL(this);" required>
                                </div>
                            
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                            </form>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
                                                <!--Modal End  -->
          
         
         
          <!-- ./col -->
        </div>
     
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
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
     function readingURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah2')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
    <!-- /.content -->
<?php include "../footer/footer.php";?>