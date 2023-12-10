<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/dist/css/adminlte.min.css">
    <title>Download</title>
</head>
<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Produk Ternak.xls");
	?>
<body>

<?php include "../koneksi.php"; 

$query2="SELECT * FROM breeder WHERE id_breeder=1";
$result2=mysqli_query($db,$query2);

if(mysqli_num_rows($result2)<1){
    echo "Notfound";
}else{
    $data1=mysqli_fetch_array($result2);
}

?>

<h3 class="text-center"><?php echo $data1['nama_peternakan']?></h3>
<h5 class="text-center">Laporan Data Burung <?php echo date("d-M-Y")?></h5>

<table class="table table-bordered"  border="1">
    <thead>
        <tr>
        <th>NO</th>
                                    <th>Nama</th>
                                    <th>Tgl Menetas</th>
                                    <th>Warna</th>
                                    <th>Gender</th>
                                    <th>Ring</th>
                                    <th>Induk</th>                                    
                                    <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
                             
          $no=1;
          $query="SELECT t.*,i.nama FROM ternak t, induk i  WHERE i.id_induk=t.id_induk ORDER BY t.id_ternak";
          $result=mysqli_query($db,$query);
          while($data=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $data['nama_burung']?></td>
                                    <td><?php 
                                        $tgl3=$data['tgl_menetas'];
                                      echo date('d-m-Y', strtotime($tgl3));?></td>
                                    <td><?php echo $data['warna']?></td>
                                    <td><?php echo $data['gender']?></td>
                                    <td><?php echo $data['ring']?></td>
                                    <td><?php echo $data['nama']?></td>
                                 
                                    
                                    <td><?php 
                                    
                                    if ($data['status']==1) {
                                      echo "Terjual";
                                    }else{
                                      echo "Belum Terjual"; 
                                    }?>
                                    
                                    </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

</body>
<script>
   window.print();
   </script>

</html>