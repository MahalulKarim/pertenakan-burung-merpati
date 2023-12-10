<?php include "../header/header.php"?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Breeding Management</h1>
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
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item ">
                     <?php
                    if (isset($_GET['id'])) {
                      $aktive=$_GET['id'];
                    }
                  ?>
                    <a class="nav-link <?= $aktive=='1' ? 'active' : ''; ?>" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-reg-burung" role="tab" aria-controls="custom-tabs-one-reg-burung" aria-selected="true">Registrasi Burung</a>
                  </li>
                  <li class="nav-item">
                     <?php
                    if (isset($_GET['id'])) {
                      $aktive=$_GET['id'];
                    }
                  ?>
                    <a class="nav-link <?= $aktive=='2' ? 'active' : ''; ?>" id="custom-tabs-one-induk-register-tab" data-toggle="pill" href="#custom-tabs-one-induk-register" role="tab" aria-controls="custom-tabs-one-induk-register" aria-selected="false">Registrasi Induk Burung</a>
                  </li>
                  <?php
                    if (isset($_GET['id'])) {
                      $aktive=$_GET['id'];
                    }
                  ?>
                  <li class="nav-item">

                    <a class="nav-link  <?= $aktive=='3' ? 'active' : ''; ?>" id="custom-tabs-one-data-burung-tab" data-toggle="pill" href="#custom-tabs-one-data-burung" role="tab" aria-controls="custom-tabs-one-data-burung" aria-selected="false">Daftar Burung</a>
                  </li>
                  <li class="nav-item">
                    <?php
                    if (isset($_GET['id'])) {
                      $aktive=$_GET['id'];
                    }
                  ?>
                    <a class="nav-link  <?= $aktive=='4' ? 'active' : ''; ?>" id="custom-tabs-one-induk-tab" data-toggle="pill" href="#custom-tabs-one-induk" role="tab" aria-controls="custom-tabs-one-induk" aria-selected="false">Daftar Induk Burung</a>
                  </li>
                  <li class="nav-item">
                      <?php
                    if (isset($_GET['id'])) {
                      $aktive=$_GET['id'];
                    }
                  ?>
                    <a class="nav-link  <?= $aktive=='5' ? 'active' : ''; ?>" id="custom-tabs-one-ternak-tab" data-toggle="pill" href="#custom-tabs-one-ternak" role="tab" aria-controls="custom-tabs-one-ternak" aria-selected="false">Produk Ternak</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade  <?= $aktive=='1' ? 'show active' : ''; ?>" id="custom-tabs-one-reg-burung" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                   
                      <div class="row">
                        <div class="col-lg-6">
                          <form method="POST" action="simpan_management.php" enctype="multipart/form-data">
                            <input type="hidden" name="id_user" value="<?php echo $user['id_user']?>">
                           <div class="form-group">
                              <label>Tanggal Registrasi :</label>
                              <input type="date" name="tgl" class="form-control" placeholder="" required="">
                            </div>
                            <div class="form-group">
                              <label>Ring :</label>
                              <input type="text" name="ring" class="form-control" placeholder="Ring" required="">
                            </div>
                             <div class="form-group">
                              <label>Nama Burung :</label>
                              <input type="text" name="nama_burung" class="form-control" placeholder="Nama Burung" required="">
                            </div>
                            <div class="form-group">
                              <label>Warna :</label>
                              <input type="text" name="warna" class="form-control" placeholder="Warna" required="">
                            </div>
                            <div class="form-group">
                              <label>Gender :</label>
                            </div>
                            <div class="form-group" style="margin-top: -20px">
                              <input type="radio" name="gender" value="jantan" required style=" margin-right:5px">Jantan
                              <input type="radio" name="gender" value="betina" required style="margin-left:10px; margin-right:5px">Betina
                            </div>
                          </div>
                          <div class="col-lg-6">
                          <div class="form-group">
                              <label>Induk Jantan :</label>
                              <input type="text" name="i_jantan" class="form-control" placeholder="Induk Jantan" required="">
                            </div>
                            <div class="form-group">
                              <label>Induk Betina :</label>
                              <input type="text" name="i_betina" class="form-control" placeholder="Induk Betina" required="">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputFile">Gambar :</label>
                              <div class="input-group">
                                  <input type="file" name="gambar" class="form-control" id="exampleInputFile">
                             
                               
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label>Keterangan :</label>
                            </div>
                            <div class="form-group">
                              <textarea class="form-control" name="ket" rows="5" placeholder="Tulis Disini"></textarea>
                            </div>
                        </div>

                        <div class="col-12">
                          <input type="submit" name="simpan" class="btn btn-info" value="Simpan">
                          </form>
                        </div>
                      </div>
                     

                  </div>
                  <!-- induk -->
                  <div class="tab-pane fade  <?= $aktive=='2' ? 'show active' : ''; ?>" id="custom-tabs-one-induk-register" role="tabpanel" aria-labelledby="custom-tabs-one-induk-register-tab">
                    <form method="POST" action="simpan_management.php">
                    <input type="hidden" name="id_user" value="<?php echo $user['id_user']?>">
                    <div class="row ">
                       <div class="col-lg-6 ">
                            <div class="form-group">
                            <label>Tgl Register  :</label>
                            <input type="date" name="tgl" class="form-control" required="">
                            
                          </div>
                      </div>
                      <div class="col-lg-6 ">
                           <div class="form-group">
                            <label>Kode  :</label>
                              <input type="text" name="kode" class="form-control" required="" placeholder="Kode Induk">
                            
                          </div>
                      </div>
                      <div class="col-lg-6 ">
                            <div class="form-group">
                            <label>Betina  :</label>
                            <select name="id_betina" class="form-control">
                              <?php
                               
                                  $query="SELECT * FROM burung WHERE gender='betina'";
                                  $result=mysqli_query($db,$query);
                                  while($data=mysqli_fetch_array($result)){?>
                                      <option value="<?= $data['id_burung']?>"><?php echo $data['nama']." [".$data['ring']."]"?></option>
                              <?php
                                  }
                              ?>
                            </select>
                            
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                            <label>Jantan  :</label>
                            <select name="id_jantan" class="form-control">
                              <?php
                                  
                                  $query="SELECT * FROM burung WHERE gender='jantan'";
                                  $result=mysqli_query($db,$query);
                                  while($data=mysqli_fetch_array($result)){?>
                                      <option value="<?= $data['id_burung']?>"><?php echo $data['nama']." [".$data['ring']."]"?></option>
                              <?php
                                  }
                              ?>
                            </select>
                            
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label>Nama :</label>
                          <input type="text" name="nama" class="form-control" placeholder="Nama">
                        </div>
                      </div>
                       <div class="col-lg-6">
                        <div class="form-group">
                          <label>Keterangan :</label>
                          <textarea class="form-control" name="ket" placeholder="Tulis Disini"></textarea>
                        </div>
                      </div>
                      
                    </div>
                    
                      
                    
                      <button type="submit" name="simpan_induk" class="btn btn-info">Simpan</button>
                    </form>
                  </div>
                  
                  <div class="tab-pane fade <?= $aktive=='3' ? 'show active' : ''; ?>" id="custom-tabs-one-data-burung" role="tabpanel" aria-labelledby="custom-tabs-one-data-burung-tab">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>NO</th>
                          <th>Tgl Reg</th>
                          <th>Ring</th>
                          <th>Nama</th>
                          <th>Warna</th>
                          <th>Gender</th>
                          <th>Image</th>
                          <th>Aksi</th>
                          <!-- <th>Aksi</th> -->
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                             
                              $no=1;
                              $query="SELECT b.*,u.nama as name FROM burung b, user u where u.id_user=b.id_user ORDER BY b.id_burung desc";
                              $result=mysqli_query($db,$query);
                              while($data=mysqli_fetch_array($result))
                            {
                          ?>
                        <tr>
                          <td><?php echo $no++?></td>
                          <td><?php 
                              $tgl1=$data['tanggal_reg'];
                            echo date('d-m-Y', strtotime($tgl1));?></td>
                          <td><?php echo $data['ring']?></td>
                          <td><?php echo $data['nama']?></td>
                          <td><?php echo $data['warna']?></td>
                          <td><?php echo $data['gender']?></td>
                          <td><img src="../asset/img/burung/<?php echo $data['image']?>" width="90px" alt="Burung"></td>
                          <td>
                             <a class="text-info" data-toggle="modal" data-target="#modal-default<?php echo $data['id_burung']?>">
                               <i class="fas fa-plus-circle"></i>
                              </a>
                                <div class="modal fade" id="modal-default<?php echo $data['id_burung']?>">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Detail</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                    <h6>Nama Burung : </h6>
                                      <p><?php echo $data['nama']?></p>
                                      <h6>Input By : </h6>
                                      <p><?php echo $data['name']?></p>
                                      <h6>Gambar : </h6>
                                      <img src="../asset/img/burung/<?php echo $data['image']?>" width="100%" alt="Burung">
                                      <h6>Induk Jantan : </h6>
                                      <p><?php echo $data['induk_jantan']?></p>
                                      <h6>Induk Betina : </h6>
                                      <p><?php echo $data['induk_betina']?></p>
                                      <h6>Ring  :</h6>
                                      <p><?php echo $data['ring']?></p>
                                      <h6>Ket  :</h6>
                                      <p><?php echo $data['keterangan']?></p>
                                    </div>
                                    <div class="modal-footer justify-content-end">
                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                              </div>
                              <?php 
                              
                                if($data['id_user']==$user['id_user']){
                                  ?>

                              <a href="edit_burung.php?id_burung=<?php echo $data['id_burung']?>" class="text-success"><i class="fas fa-pencil-alt"></i></a>
                              <a href="hapus_burung.php?id_burung=<?php echo $data['id_burung']?>" onclick="return(confirm('Yakin Hapus Data Burung <?php echo $data['nama']?> ?, Jika iya maka data induk yang terkait akan di hapus juga!'))" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                  <?php

                                } else{
                                  
                                }
                              
                              ?>
                              

                          </td>
                          
                        </tr>
                          <?php 
                            }
                          ?>
                       </tbody>
                      </table>
                  </div>
                  <div class="tab-pane fade  <?= $aktive=='4' ? 'show active' : ''; ?>" id="custom-tabs-one-induk" role="tabpanel" aria-labelledby="custom-tabs-one-induk-tab">
                      <table id="example2" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>NO</th>
                          <th>Tgl Reg</th>
                          <th>Kode</th>
                          <th>Nama</th>
                          <th>Betina</th>
                          <th>Jantan</th>
                          <th>Aksi</th>
                          <!-- <th>Aksi</th> -->
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                              $no=1;
                              $query="SELECT i.*,u.nama as name FROM induk i, user u WHERE u.id_user=i.id_user";
                              $result=mysqli_query($db,$query);
                              while($data=mysqli_fetch_array($result))
                            {
                          ?>
                        <tr>
                          <td><?php echo $no++?></td>
                          <td><?php 
                              $tgl2=$data['tgl_reg'];
                            echo date('d-m-Y', strtotime($tgl2));?></td>
                          <td><?php echo $data['kode']?></td>
                          <td><?php echo $data['nama']?></td>
                          <td>
                            <?php 
                              $idBetina=$data['id_betina'];
                              $query2="SELECT nama FROM burung WHERE id_burung='$idBetina'";
                              $result2=mysqli_query($db,$query2);
                              if (mysqli_num_rows($result2)<1) {
                                echo "Data Burung Tidak Ada Atau Dihapus!";
                              }else{
                                 $data2=mysqli_fetch_array($result2);
                                echo $data2['nama'];
                              }
                             ?>
                              
                          </td>
                          <td>
                            <?php 
                              $idJantan=$data['id_jantan'];
                              $query3="SELECT nama FROM burung WHERE id_burung='$idJantan'";
                              $result3=mysqli_query($db,$query3);
                               if (mysqli_num_rows($result3)<1) {
                                echo "Data Burung Tidak Ada Atau Dihapus!";
                              }else{
                                 $data3=mysqli_fetch_array($result3);
                                echo $data3['nama'];
                              }
                              ?>
                              
                          </td>
                          
                          <td>
                             <a class="text-info" data-toggle="modal" data-target="#modal-default<?php echo $data['id_induk']?>">
                               <i class="fas fa-plus-circle"></i>
                              </a>
                                <div class="modal fade" id="modal-default<?php echo $data['id_induk']?>">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Detail</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h6>Nama : </h6>
                                      <p><?php echo $data['nama']?></p>
                                      
                                      <h6>Ket : </h6>
                                      <p><?php echo $data['ket']?></p>
                                    </div>
                                    <div class="modal-footer justify-content-end">
                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                              </div>
                              <?php 
                              
                                if($data['id_user']==$user['id_user']){
                                  ?>

                              <a href="edit_induk.php?id_induk=<?php echo $data['id_induk']?>" class="text-success"><i class="fas fa-pencil-alt"></i></a>
                              <a href="hapus_induk.php?id_induk=<?php echo $data['id_induk']?>" class="text-danger" onclick="return(confirm('Yakin Hapus Data Induk?'))"><i class="fas fa-trash-alt"></i></a>
                                  
                                  <?php

                                } else{
                                  
                                }
                              
                              ?>
                             

                          </td>
                          
                        </tr>
                          <?php 
                            }
                          ?>
                       </tbody>
                      </table>
                  </div>
                   <div class="tab-pane fade <?= $aktive=='5' ? 'show active' : ''; ?>" id="custom-tabs-one-ternak" role="tabpanel" aria-labelledby="custom-tabs-one-ternak-tab">
                      <div class="row">
                        <div class="col-3 col-sm-2">
                          <div class="nav flex-column nav-tabs h-100 " id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">Tambah Produk Ternak</a>
                            <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Data Produk Ternak</a>
                            
                            
                          </div>
                        </div>
                        <div class="col-8 col-sm-9">
                          <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                               <div class="row">
                                  <div class="col-lg-6">
                                    <form method="POST" action="simpan_ternak.php" enctype="multipart/form-data">
                                    <input type="hidden" name="id_user" value="<?php echo $user['id_user']?>">
                                     <div class="form-group">
                                        <label>Tanggal Menetas :</label>
                                        <input type="date" name="tgl" class="form-control" placeholder="" required="">
                                      </div>
                                     <div class="form-group">
                                        <label>Nama :</label>
                                        <input type="text" name="nama_burung" class="form-control" placeholder="Nama Burung">
                                      </div>
                                      <div class="form-group">
                                        <label>Induk : </label>
                                        <select class="form-control" name="id_induk">
                                          <?php
                                           
                                            $query5="SELECT * FROM induk";
                                            $result5=mysqli_query($db,$query5);
                                            while ($data5=mysqli_fetch_array($result5)) {?>

                                              <option value="<?php echo $data5['id_induk']?>">
                                                <?php echo $data5['nama'].' [Kode='.$data5['kode'].']';?>
                                                  
                                                </option>
                                              <?php
                                              
                                            }
                                          ?>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label>Ring :</label>
                                        <input type="text" name="ring" class="form-control" placeholder="Ring" >
                                      </div>
                                      <div class="form-group">
                                        <label>Warna :</label>
                                        <input type="text" name="warna" class="form-control" placeholder="Warna">
                                      </div>
                                      
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Gender :</label>
                                      </div>
                                      <div class="form-group" style="margin-top: -20px">
                                        <input type="radio" name="gender" value="jantan" required style=" margin-right:5px">Jantan
                                        <input type="radio" name="gender" value="betina" required style="margin-left:10px; margin-right:5px">Betina
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputFile">Gambar :</label>
                                        <div class="input-group">
                                            <input type="file" name="gambar" class="form-control" id="exampleInputFile">
                                       
                                         
                                        </div>
                                      </div>
                                      
                                      <div class="form-group">
                                        <label>Keterangan :</label>
                                      </div>
                                      <div class="form-group">
                                        <textarea class="form-control" name="ket" rows="5" placeholder="Tulis Disini"></textarea>
                                      </div>
                                  </div>

                                  <div class="col-12">
                                    <input type="submit" name="simpan_ternak" class="btn btn-info" value="Simpan">
                                    </form>
                                  </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                               <table id="example3" class="table table-bordered table-striped">
                                  <thead>
                                  <tr>
                                    <th>NO</th>
                                    <th>Nama</th>
                                    <th>Tgl Menetas</th>
                                    <th>Warna</th>
                                    <th>Gender</th>
                                    <th>Ring</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                    <!-- <th>Aksi</th> -->
                                  </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                       
                                        $no=1;
                                        $query5="SELECT t.*,i.nama,u.nama as name FROM ternak t, induk i, user u WHERE i.id_induk=t.id_induk AND 
                                        u.id_user=t.id_user";
                                        $result5=mysqli_query($db,$query5);
                                        while($data5=mysqli_fetch_array($result5))
                                      {
                                    ?>
                                  <tr>
                                    <td><?php echo $no++?></td>
                                    <td><?php echo $data5['nama_burung']?></td>
                                    <td><?php 
                                        $tgl3=$data5['tgl_menetas'];
                                      echo date('d-m-Y', strtotime($tgl3));?></td>
                                    <td><?php echo $data5['warna']?></td>
                                    <td><?php echo $data5['gender']?></td>
                                    <td><?php echo $data5['ring']?></td>
                                    
                                    <td><?php 
                                    
                                    if ($data5['status']==1) {
                                      echo "Terjual";
                                    }else{
                                      echo "Belum Terjual"; 
                                    }?>
                                    
                                    </td>

                                    <td>
                                       <a class="text-info" data-toggle="modal" data-target="#modal-default<?php echo $data5['id_ternak']?>">
                                         <i class="fas fa-plus-circle"></i>
                                        </a>
                                          <div class="modal fade" id="modal-default<?php echo $data5['id_ternak']?>">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h4 class="modal-title">Detail</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                <p>Nama : </p>
                                                <p><?php echo $data5['nama'] ?></p>
                                                <p>Input By : </p>
                                                <p><?php echo $data5['name'] ?></p>
                                                <p>Gambar :</p>
                                                <img src="../asset/img/burung/<?php echo $data5['image']?>" width="100%" alt="Ternak">
                                                <p>Ring:</p>
                                                <p><?php echo $data5['ring']?></p>
                                                <p>Induk :</p>
                                                <p><?php echo $data5['nama']?></p>
                                                <p>Keterangan :</p>
                                                <p><?php echo $data5['keterangan']?></p>
                                              </div>
                                              <div class="modal-footer justify-content-end">
                                              <a href="biodataternak.php?id_ternak=<?php echo $data5['id_ternak']?>" class="btn btn-primary" target="_blank">Biodata</a>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                              </div>
                                            </div>
                                            <!-- /.modal-content -->
                                          </div>
                                          <!-- /.modal-dialog -->
                                        </div>
                                        <?php 
                              
                              if($data5['id_user']==$user['id_user']){
                                ?>

                                  <a href="edit_ternak.php?id_ternak=<?php echo $data5['id_ternak']?>" class="text-success"><i class="fas fa-pencil-alt"></i></a>
                                  <a href="hapus_ternak.php?id_ternak=<?php echo $data5['id_ternak']?>" class="text-danger" onclick="return(confirm('Yakin Hapus Data Ternak?'))"><i class="fas fa-trash-alt"></i></a>

                                <?php

                              } else{
                                
                              }
                            
                            ?>
                           
                                      
                                    </td>
                                    
                                  </tr>
                                    <?php 
                                      }
                                    ?>
                                 </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
                               Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                               Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                            </div>
                          </div>
                        </div>
                      </div>
                      
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