<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio Data Ternak</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>
<body>

<?php
include '../koneksi.php';
if(isset($_GET['id_ternak'])){


$idTernak=$_GET['id_ternak'];

$query="SELECT * FROM breeder";
$result=mysqli_query($db,$query);

$data=mysqli_fetch_array($result);
?>

<style>
    h2,h3,h4{
        text-align:center;
    }
    h3,h4{
        margin-top:-15px;
    }
    table{
        text-align:left;
    }
</style>

<div class="container pt-2">
    <div class="col-12">
        <h2 class="text-center" text-align="center">BIODATA PRODUK TERNAK</h2>
        <h3 class="text-center"><?php echo $data['nama_peternakan']?></h3>
        <h4 class="text-center"><?php echo $data['alamat']?></h4>
    </div>
    <div class="col-12">
        <?php
            $query2="SELECT * FROM ternak WHERE id_ternak='$idTernak'";
            $result2=mysqli_query($db,$query2);
            $data2=mysqli_fetch_array($result2);
        ?>
        <table>
            <tr>
                <th>ID Ternak</th>
                <th>:</th>
                <th><?php echo $idTernak?></th>
            </tr>
            <tr>
                <th>ID Induk</th>
                <th>:</th>
                <th><?php echo $data2['id_induk']?></th>
            </tr>
            <tr>
                <th>Nama Burung</th>
                <th>:</th>
                <th><?php echo $data2['nama_burung']?></th>
            </tr>
            <tr>
                <th>Warna</th>
                <th>:</th>
                <th><?php echo $data2['warna']?></th>
            </tr>
            <tr>
                <th>Tgl Menetas</th>
                <th>:</th>
                <th><?php echo 
                    date('d-m-Y', strtotime($data2['tgl_menetas']));
                ?></th>
            </tr>
            <tr>
                <th>Gender</th>
                <th>:</th>
                <th><?php echo $data2['gender']?></th>
            </tr>
            <tr>
                <th>Ring</th>
                <th>:</th>
                <th><?php echo $data2['ring']?></th>
            </tr>
            <tr>
                <th>Garis Keturunan</th>
                <th></th>
                <th></th>
            </tr>
        </table>
        <?php
        $idInduk=$data2['id_induk'];
           $query3="SELECT * FROM induk WHERE id_induk='$idInduk'";
           $result3=mysqli_query($db,$query3);
           $data3=mysqli_fetch_array($result3);
           $idJantan=$data3['id_jantan'];
           $idBetina=$data3['id_betina'];

           $query4="SELECT * FROM burung WHERE id_burung='$idJantan'";
           $result4=mysqli_query($db,$query4);
           $data4=mysqli_fetch_array($result4);

           $query5="SELECT * FROM burung WHERE id_burung='$idBetina'";
           $result5=mysqli_query($db,$query5);
           $data5=mysqli_fetch_array($result5);

        ?>
        <table >
            <tr>
                <th rowspan="2" class="text-center">Induk Jantan</th>
                <th rowspan="2">:</th>
                <th rowspan="2"><input type="text" value="<?php echo $data4['nama']?>"></th>
                <th><input type="text" value="J : <?php echo $data4['induk_jantan']?>"></th>
            </tr>
            <tr>
                <th><input type="text" value="B : <?php echo $data4['induk_betina']?>"></th>
                
                
            </tr>
            <tr>
                <th rowspan="2" class="text-center">Induk Betina</th>
                <th rowspan="2">:</th>
                <th rowspan="2"><input type="text" value="<?php echo $data5['nama']?>"></th>
                <th><input type="text" value="J : <?php echo $data5['induk_jantan']?>"></th>
            </tr>
            <tr>
                <th><input type="text" value="B : <?php echo $data5['induk_betina']?>"></th>
                
                
            </tr>
           

        </table>

        <table width="100%" style="margin-top:40px">
            <tr>
                <th class="text-end" width="80%"></th>
                <th></th>
                <th></th>
                <th whidth="5%">TTD</th>
            </tr>
           
           
        </table>
    </div>
</div>

<?php
}
?>
</body>
<script>
   window.print();
   </script>
</html>