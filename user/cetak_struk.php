
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Struk</title>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../asset/plugins/fontawesome-free/css/all.min.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="../asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../asset/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../asset/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../asset/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../asset/plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="../asset/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
</head>
<body>

 <?php 
 if (isset($_POST['cetak_struk'])) {
   $farm=$_POST['farm'];
    $tgl=$_POST['tgl'];
    $ring=$_POST['ring'];
    $nama=$_POST['nama'];
    $nominal=$_POST['nominal'];
    $tot=$_POST['tot'];

    ?>
    
    <h2 class="text-center pt-3"><?php echo $farm?></h2>
    <div class="container p-5">
      <table align="center" width="100%" class="table">
          <thead>
              <tr>
                <th>Tanggal : <?php echo date('d-m-Y', strtotime($tgl))?></th>
              </tr>
          </thead>
          <tr>
                <th>No</th>
                <th>Ring</th>
                <th>Induk</th>
                <th>Harga</th>
          </tr>
          <tbody>
          <?php
              $no=1;
              for ($i=0; $i < sizeof($ring); $i++) { ?>
              <tr>
                  <td><?php echo $no++  ?></td>      
                <td><?php  echo $ring[$i] ?></td>      
                <td><?php  echo $nama[$i] ?></td>      
                <td>Rp. <?php echo number_format($nominal[$i]) ?></td>  
              
              </tr>





            <?php
             
            }

         
        ?>
        <tr>
         <td></td>
         <td></td>
         <td></td>
          <td><strong>Total</strong></td>
          <td><strong>Rp. <?php echo number_format($tot)?></strong></td>
          
        </tr>
            
          </tbody>
      </table>
      <table align="right" class="pt-4">
              <tr>
                <td><?php echo $farm?></td>
              </tr>
      </table>
    </div>


    
<?php
  }
 
 ?>
<script>
window.print()
</script>
</body>
</html>