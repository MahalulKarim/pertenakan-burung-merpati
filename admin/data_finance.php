<?php include "../header/header_admin.php"?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Finance</h1>
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
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <!-- <a class="nav-link active" id="custom-tabs-one-pembelian-tab" data-toggle="pill" href="#custom-tabs-one-pembelian" role="tab" aria-controls="custom-tabs-one-pembelian" aria-selected="true">Pembelian</a> -->
                  </li>
                  <li class="nav-item">
                  
                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Data Penjualan</a>
                  </li>
                  <li class="nav-item">
                  <?php
                    if (isset($_GET['id'])) {
                      $aktive=$_GET['id'];
                    }
                  ?>
                    <a class="nav-link <?= $aktive=='2' ? 'active' : ''; ?>" id="custom-tabs-one-penjualan-tab" data-toggle="pill" href="#custom-tabs-one-penjualan" role="tab" aria-controls="custom-tabs-one-penjualan" aria-selected="false">penjualan Baru</a>
                  </li>
                  
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <!-- <div class="tab-pane fade show active" id="custom-tabs-one-pembelian" role="tabpanel" aria-labelledby="custom-tabs-one-pembelian-tab">
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur.
                  </div> -->
                  
                  <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                        <div class="row">
                              <div class="col-lg-12">
                                    <table id="example3" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Burung</th>
                                                <th>Ring</th>
                                                <th>Tgl Transaksi</th>
                                                <th>Harga</th>
                                                <th>User</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                          $no=1;
                                            
                                            $query="SELECT f.nominal,f.tgl_transaksi,f.id_transaksi,f.keterangan as ket, t.*,u.nama as name FROM finance f, ternak t, user u WHERE t.id_ternak=f.id_pt AND u.id_user=f.id_user";
                                            $result=mysqli_query($db,$query);
                                            while($data=mysqli_fetch_array($result)){
                                              ?>
                                              
                                              
                                            
                                          <tr>
                                            <td><?php echo $no++?></td>
                                            <td><?php echo $data['nama_burung']?></td>
                                            <td><?php echo $data['ring']?></td>
                                            <td><?php echo date('d-m-Y',strtotime($data['tgl_transaksi']))?></td>
                                            <td>Rp. <?php echo number_format($data['nominal'])?></td>
                                            <td><?php echo $data['name']?></td>
                                           
                                            <td>
                                        <a class="text-info" data-toggle="modal" data-target="#modal-default<?php echo $data['id_transaksi']?>">
                                          <i class="fas fa-plus-circle"></i>
                                          </a>
                                            <div class="modal fade" id="modal-default<?php echo $data['id_transaksi']?>">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Keterangan</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  <p><?php echo $data['ket']?></p>
                                                </div>
                                                <div class="modal-footer justify-content-end">
                                                <a href="biodataternak.php?id_ternak=<?php echo $data['id_ternak']?>" class="btn btn-primary" target="_blank">Biodata</a>
                                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                              <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                          </div>
                                          
                                          
                                            </td>
                                          </tr>  <?php
                                            }
                                          ?>
                                        </tbody>
                                    
                                    </table>
                              </div>
                        </div>
                  </div>
                  <div class="tab-pane fade <?= $aktive=='2' ? 'show active' : ''; ?>" id="custom-tabs-one-penjualan" role="tabpanel" aria-labelledby="custom-tabs-one-penjualan-tab">
                        <div class="row">
                            <div class="col-lg-12">
                            <button type="button" class="btn btn-primary m-2" id="btn-tambah">Tambah Burung</button>
                            <form action="simpan_penjualan.php" method="POST">
                            <input type="hidden" name="id_user" value="<?php echo $user['id_user']?>">
                            <table class="table" style="">
                                <thead>
                                    <th>No.</th>
                                    <th>Induk/Ring</th>
                                    <th>Harga</th>                                   
                                  
                                    <th></th>
                                </thead>
                                <tbody id="tbl-barang-body">
                                </tbody>
                                          </table>
                            </div>
                        </div>
                       
                        <div class="row btnSave" style="display:none;">
                            <div class="col-lg-12">
                                <div class="form-group">
                                      <label for="">Keterangan :</label>
                                      <textarea name="ket" class="form-control" id="" cols="30" rows="4" placeholder="Tulis Disini"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" name="simpan_penjualan" onclick="return(confirm('Pastikan Semua Data Sudah Benar!'))" class="btn btn-primary">Lanjutkan</button>    
                            </div>
                        </div>
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
  <script src="../asset/js/myjquery.js"></script>
   
    <script>
        $(function(){
            var count = 0;
            
            if(count == 0){
                $('.btnSave').hide();
            }
            $('#btn-tambah').on('click', function(){
                count +=1;
                $('#tbl-barang-body').append(`
                    <tr>
                        <td>`+ count +`</td>
                        <td>
                        <select class="form-control" name="id_ternak[]">

                        <?php 
                           
                            $query="SELECT t.*,i.nama FROM ternak t,induk i WHERE t.id_induk=i.id_induk AND t.status=0";
                            $result=mysqli_query($db,$query);
                            while($dataTernak=mysqli_fetch_array($result)){?>
                             
                               <option value="<?php  echo $dataTernak['id_ternak'];?>"><?php  echo $dataTernak['nama'];?>/<?php  echo $dataTernak['ring'];?></option> 

                            <?php

                             }
                          ?>
                          
                          </select>
                        </td>
                        <td>
                        <input name="nominal[]" type="number" class="form-control" placeholder="ex:200000" required min="1">
                        <small class="text-danger">(Masukan Tanpa Tanda Baca!)*</small>
                        </td>
                           
                        <td>
                            <button type="button" class="btn btn-danger removeItem">HAPUS</button>
                        </td>
                    </tr>
                `);

                if(count > 0){
                    $('.btnSave').show();
                }

                $('.removeItem').on('click', function(){
                    $(this).closest("tr").remove();
                    count +=1;
                    if(count == 0){
                        $('.btnSave').hide();
                    }
                })
            })
        })
    </script>
  
    <!-- /.content -->
<?php include "../footer/footer.php";?>