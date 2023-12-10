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
	header("Content-Disposition: attachment; filename=Data Burung.xls");
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

<table class="table table-bordered" border="1">
    <thead>
        <tr>
            <th>NO</th>
            <th>Tgl Reg</th>
            <th>Ring</th>
            <th>Nama</th>
            <th>Warna</th>
            <th>Gender</th>
        </tr>
    </thead>
    <tbody>
        <?php
                             
          $no=1;
          $query="SELECT b.*,u.nama as name FROM burung b, user u where u.id_user=b.id_user ORDER BY id_burung DESC";
          $result=mysqli_query($db,$query);
          while($data=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $no++?></td>
            <td>
                <?php 
                                $tgl1=$data['tanggal_reg'];
                                echo date('d-m-Y', strtotime($tgl1));?>
            </td>
            <td><?php echo $data['ring']?></td>
            <td><?php echo $data['nama']?></td>
            <td><?php echo $data['warna']?></td>
            <td><?php echo $data['gender']?></td>
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