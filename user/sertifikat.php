<?php 
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../asset/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<style>
    *{
        padding:0px;
        margin:0px;
    }
 
    .container{
        
        height:100vh;
        background-image:url(../asset/img/background/bg1.png);
        background-repeat:no-repeat;
        background-size: cover;
        background-position: top left;
    }
    .containers{
        
        height:100vh;
        background-color:rgba(154,35,35,255);
        /* background-repeat:no-repeat;
        background-size: cover;
        background-position: top left; */
    }
    .space{
        padding-top:10px;
    }
    .title{
        padding:10px;
        width:50%;
        border:2px solid skyblue;
        border-radius:5px;
        background-color: white;

        margin:  auto;
        text-align:center;
        color:skyblue;
    }
   


    * {
    box-sizing: border-box;
    }

    /* Create four equal columns that floats next to each other */
    .col {
       
    float: left;
    width: 20%;
    padding: 10px;
    height: 80vh; /* Should be removed. Only for demonstration */
    }
    .col2 {
        
    float: left;
    padding: 10px;/* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
    }

    .row2{
        background-color:white;
        border:2px solid skyblue;
        border-radius:5px;
    }
    .row2:after {
        
    width:100%;
    content: "";
    display: table;
    clear: both;
    }
    ul{
        list-style:none;
        padding-top:18px;
    }
    .ul2{
        list-style:none;
        padding-top:50px;
    }
    li{
        background-color:white;
        border:2px solid skyblue;
        border-radius:5px;
        
        padding:10px;
        margin-top:10px;
    }
    .pt{
        padding-top:10px;
    }
    @media print {
* {
    -webkit-print-color-adjust: exact !important; /*Chrome, Safari */
    color-adjust: exact !important;  /*Firefox*/
  }
}

.btn{
    background-color:skyblue;
    border:none;
    padding:5px;
    font-size:20px;
    margin-left:20px;
    border-radius:8px;
}
.btn:hover{
    cursor: pointer;
    background-color:blue;
    border:none;
    padding:5px;
    font-size:20px;
    margin-left:20px;
    border-radius:8px;
    color:white;
}
</style>
<body>

<?php 
        
        
    if (isset($_GET['id_ternak'])) {
        $idTernak=$_GET['id_ternak'];
        $query="SELECT t.*,i.id_jantan,i.id_betina FROM ternak t, induk i  WHERE i.id_induk=t.id_induk AND  t.id_ternak='$idTernak'";
        $result=mysqli_query($db,$query);
        $data=mysqli_fetch_array($result);

        $query2="SELECT * FROM breeder WHERE id_breeder=1";
        $result2=mysqli_query($db,$query2);
        $user=mysqli_fetch_array($result2);
           
        
    }
?>
   
    
<style>
     .bg1{
        
        /* height:100vh; */
        background-color:rgba(154,35,35,255);
        /* background-repeat:no-repeat;
        background-size: cover;
        background-position: top left; */
    }
    .t1{
        font-family: "Times New Roman", Times, serif;
        -webkit-text-stroke: 1px white;
        text-shadow: 2px 2px black;
        font-size:35px;
        font-weight: bold;
    }
    .t2{
        font-family: "Times New Roman", Times, serif;        
        font-size:25px;
        border-bottom:2px solid black;
    }
    .t3{
        font-family: "Times New Roman", Times, serif;        
        font-size:15px;
    }
    .pic1{
        width:150px;

    }
    .card1{
        
        border-radius:40px 0px 40px 0px;
        background-color:rgba(230,230,230,255);
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        

    }
    .card2{
        border-radius:40px 0px 40px 0px;
        background-color:rgba(250,120,120,255);
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        
    }
</style>

<div class="container-fluid bg1">
        <div class="row">

            <div class="col-12 px-5 py-1">
                <div class="card mx-5" style="border-radius:100px">
                    <div class="card-body px-5">
                        <div class="row px-5">
                                <div class="col-12 px-0">
                                    <h1 class="text-center t1" style="">SERTIFIKAT SILSILAH MERPATI</h1>
                                </div>
                                <div class="col-12 px-0">
                                    <h1 class="text-center t2" style=""><?php echo $user['nama_peternakan']?></h1>
                                </div>                   
                                <div class="col-12">
                                    <p class="t3 text-center px-0" style="">Alamat : <?php echo $user['alamat']?>, No Telp: <?php echo $user['no_hp']?></p>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
              
        </div>
        <div class="row" style="margin-top:-200px">
                <div class="col-6">
                    <img src="../asset/img/background/burung1.png" alt="" class="pic1">
                </div>
                <div class="col-6 d-flex justify-content-end"> 
                    <img src="../asset/img/background/burung2.png" alt="" class="pic1">
                </div>
        </div>
        <div class="row pt-5">
            <div class="col-2">
                <div class="card card1" style="margin-top:190px;">
                    <div class="card-body">

                    <?php echo $data['nama_burung']?>
                           
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="row">
                    <div class="col-12">
                        <div class="card card1" style="margin-left:-40px;margin-top:80px;width:200px">
                            <div class="card-body py-0">
                                <div class="col-12">

                                </div>
                            <?php 
                             $id_jantan=$data['id_jantan'];
                             $query2="SELECT * FROM burung WHERE id_burung='$id_jantan'";
                             $result2=mysqli_query($db,$query2);
                             $data2=mysqli_fetch_array($result2);

                             
                            ?>
                           <p class="mt-2 text-center">

                            <?php echo $data2['nama'];?>
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card2" style="margin-left:-40px;margin-top:170px;width:200px">
                            <div class="card-body py-0">
                            <?php 
                             $id_betina=$data['id_betina'];
                             $query3="SELECT * FROM burung WHERE id_burung='$id_betina'";
                             $result3=mysqli_query($db,$query3);
                             $data3=mysqli_fetch_array($result3);

                             
                        ?>
                            <p class="mt-2 text-center text-white">

                                <?php echo $data3['nama'];?>
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="row">
                    <div class="col-12">
                        <div class="card card1" style="margin-left:-40px;margin-top:30px;width:200px">
                            <div class="card-body py-0">
                                <div class="col-12">

                                </div>
                           
                           <p class="mt-2 text-center">

                           <?php echo $data2['induk_jantan']?>
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card2" style="margin-left:-40px;margin-top:45px;width:200px">
                            <div class="card-body py-0">
                            
                            <p class="mt-2 text-center text-white">

                            <?php echo $data2['induk_betina']?>
                            </p>
                            </div>
                        </div>
                    </div>
                    <!-- /// -->
                    <div class="col-12">
                        <div class="card card1" style="margin-left:-40px;margin-top:60px;width:200px">
                            <div class="card-body py-0">
                                <div class="col-12">

                                </div>
                           
                           <p class="mt-2 text-center">

                           <?php echo $data3['induk_jantan']?>
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card2" style="margin-left:-40px;margin-top:40px;width:200px">
                            <div class="card-body py-0">
                            
                            <p class="mt-2 text-center text-white">

                            <?php echo $data3['induk_betina']?>
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="row">
                    <div class="col-12">
                        <div class="card card1" style="margin-left:-40px;margin-top:-10px;width:200px">
                            <div class="card-body py-2">
                                <div class="col-12">

                                </div>
                           
                           <p class="mt-2 text-center">

                           
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card2" style="margin-left:-40px;margin-top:10px;width:200px">
                            <div class="card-body py-2">
                            
                            <p class="mt-2 text-center text-white">
                            
                            </p>
                            </div>
                        </div>
                    </div>
                    <!-- /// -->
                    <div class="col-12">
                        <div class="card card1" style="margin-left:-40px;margin-top:10px;width:200px">
                            <div class="card-body py-2">
                                <div class="col-12">

                                </div>
                           
                           <p class="mt-2 text-center">

                           
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card2" style="margin-left:-40px;margin-top:10px;width:200px">
                            <div class="card-body py-2">
                            
                            <p class="mt-2 text-center text-white">

                            
                            </p>
                            </div>
                        </div>
                    </div>
                    <!-- /// -->
                    <div class="col-12 mt-2">
                        <div class="card card1" style="margin-left:-40px;margin-top:10px;width:200px">
                            <div class="card-body py-2">
                                <div class="col-12">

                                </div>
                           
                           <p class="mt-2 text-center">
                           
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card2" style="margin-left:-40px;margin-top:10px;width:200px">
                            <div class="card-body py-2">
                            
                            <p class="mt-2 text-center text-white">

                            
                            </p>
                            </div>
                        </div>
                    </div>
                    <!-- /// -->
                    <div class="col-12">
                        <div class="card card1" style="margin-left:-40px;margin-top:10px;width:200px">
                            <div class="card-body py-2">
                                <div class="col-12">

                                </div>
                           
                           <p class="mt-2 text-center">

                           
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card2" style="margin-left:-40px;margin-top:10px;width:200px">
                            <div class="card-body py-2">
                            
                            <p class="mt-2 text-center text-white">

                            
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2" style="margin-top:-40px">
                <div class="row">
                    
                    <!-- /// -->
                    <div class="col-12">
                        <div class="card card1" style="margin-left:-40px;margin-top:10px;width:200px">
                            <div class="card-body py-1">
                                <div class="col-12">
                                </div>                           
                           <p class="mt-2 text-center">
                           
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card2" style="margin-left:-40px;margin-top:-14px;width:200px">
                            <div class="card-body py-1">
                            
                            <p class="mt-2 text-center text-white">
                            
                            </p>
                            </div>
                        </div>
                    </div>
                    <!-- /// -->
                    <!-- /// -->
                    <div class="col-12 mt-2">
                        <div class="card card1" style="margin-left:-40px;margin-top:-14px;width:200px">
                            <div class="card-body py-1">
                                <div class="col-12">
                                </div>                           
                           <p class="mt-2 text-center">
                           
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card2" style="margin-left:-40px;margin-top:-14px;width:200px">
                            <div class="card-body py-1">
                            
                            <p class="mt-2 text-center text-white">
                            
                            </p>
                            </div>
                        </div>
                    </div>
                    <!-- /// -->
                    <div class="col-12 mt-2 mt-2">
                        <div class="card card1" style="margin-left:-40px;margin-top:-14px;width:200px">
                            <div class="card-body py-1">
                                <div class="col-12">
                                </div>                           
                           <p class="mt-2 text-center">
                           
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card2" style="margin-left:-40px;margin-top:-14px;width:200px">
                            <div class="card-body py-1">
                            
                            <p class="mt-2 text-center text-white">
                            
                            </p>
                            </div>
                        </div>
                    </div>
                    <!-- /// -->
                    <div class="col-12 mt-2">
                        <div class="card card1" style="margin-left:-40px;margin-top:-14px;width:200px">
                            <div class="card-body py-1">
                                <div class="col-12">
                                </div>                           
                           <p class="mt-2 text-center">
                           
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card2" style="margin-left:-40px;margin-top:-14px;width:200px">
                            <div class="card-body py-1">
                            
                            <p class="mt-2 text-center text-white">
                            
                            </p>
                            </div>
                        </div>
                    </div>
                    <!-- /// -->
                    <!-- /// -->
                    <div class="col-12 mt-2 mt-2">
                        <div class="card card1" style="margin-left:-40px;margin-top:-14px;width:200px">
                            <div class="card-body py-1">
                                <div class="col-12">
                                </div>                           
                           <p class="mt-2 text-center">
                           
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card2" style="margin-left:-40px;margin-top:-14px;width:200px">
                            <div class="card-body py-1">
                            
                            <p class="mt-2 text-center text-white">
                            
                            </p>
                            </div>
                        </div>
                    </div>
                    <!-- /// -->
                    <div class="col-12 mt-2">
                        <div class="card card1" style="margin-left:-40px;margin-top:-14px;width:200px">
                            <div class="card-body py-1">
                                <div class="col-12">
                                </div>                           
                           <p class="mt-2 text-center">
                           
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card2" style="margin-left:-40px;margin-top:-14px;width:200px">
                            <div class="card-body py-1">
                            
                            <p class="mt-2 text-center text-white">
                            
                            </p>
                            </div>
                        </div>
                    </div>
                    <!-- /// -->
                    <div class="col-12 mt-2">
                        <div class="card card1" style="margin-left:-40px;margin-top:-14px;width:200px">
                            <div class="card-body py-1">
                                <div class="col-12">
                                </div>                           
                           <p class="mt-2 text-center">
                           
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card2" style="margin-left:-40px;margin-top:-14px;width:200px">
                            <div class="card-body py-1">
                            
                            <p class="mt-2 text-center text-white">
                            
                            </p>
                            </div>
                        </div>
                    </div>
                    <!-- /// -->
                    <div class="col-12 mt-2">
                        <div class="card card1" style="margin-left:-40px;margin-top:-14px;width:200px">
                            <div class="card-body py-1">
                                <div class="col-12">
                                </div>                           
                           <p class="mt-2 text-center">
                           
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card2" style="margin-left:-40px;margin-top:-14px;width:200px">
                            <div class="card-body py-1">
                            
                            <p class="mt-2 text-center text-white">
                            
                            </p>
                            </div>
                        </div>
                    </div>
                    <!-- /// -->
                  
                </div>
            </div>
           <div class="col-2" style="margin-top:-30px">
               <div class="card">
                   <div class="card-body">
                       <div class="row">
                           <div class="col-12 d-flex justify-content-center">
                                <img src="../asset/img/burung/<?php echo $data['image']?>" alt="Burung" class="img-thumbnail" style="height:100px;width:100px;">
                           </div>
                           <div class="col-12">

                               <p>Tanggal Menetas:</p>
                           </div>
                           <div class="col-12 p-0 d-flex justify-content-center" style="margin-top:-10px">
                                <div class="card py-0 card2" style="width:100%;height:30px">
                                    <div class="card-body p-0">
                                
                                    <p class="mt-2 p-0 text-center text-white" style="margin-top:1px!important">
                                    <?php echo date('d-m-Y', strtotime($data['tgl_menetas']))?>
                                    
                                    </p>
                                    </div>
                                </div>
                           </div>
                           <div class="col-12" style="margin-top:-15px">

                               <p>Ring:</p>
                           </div>
                           <div class="col-12 p-0 d-flex justify-content-center" style="margin-top:-10px">
                                <div class="card py-0 card2" style="width:100%;height:30px">
                                    <div class="card-body p-0">
                                
                                    <p class="mt-2 p-0 text-center text-white" style="margin-top:1px!important">
                                    <?php echo $data['ring']?>
                                    
                                    </p>
                                    </div>
                                </div>
                           </div>
                           <div class="col-12" style="margin-top:-15px">

                               <p>Warna:</p>
                           </div>
                           <div class="col-12 p-0 d-flex justify-content-center" style="margin-top:-10px">
                                <div class="card py-0 card2" style="width:100%;height:30px">
                                    <div class="card-body p-0">
                                
                                    <p class="mt-2 p-0 text-center text-white" style="margin-top:1px!important">
                                    <?php echo $data['warna']?>
                                    
                                    </p>
                                    </div>
                                </div>
                           </div>
                           <div class="col-12" style="margin-top:-15px">

                               <p>Gender:</p>
                           </div>
                           <div class="col-12 p-0 d-flex justify-content-center" style="margin-top:-10px">
                                <div class="card py-0 card2" style="width:100%;height:30px">
                                    <div class="card-body p-0">
                                
                                    <p class="mt-2 p-0 text-center text-white" style="margin-top:1px!important">
                                    <?php echo $data['gender']?>
                                    
                                    </p>
                                    </div>
                                </div>
                           </div>
                           <div class="col-12 d-flex justify-content-end" style="margin-top:-15px">
                               <p>Tertanda:</p>
                           </div>
                           <div class="col-12 mt-4 d-flex justify-content-end" style="margin-top:-15px">
                               <p>_________</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
        </div>
</div>



<script>
    var css = '@page { size: landscape; }',
    head = document.head || document.getElementsByTagName('head')[0],
    style = document.createElement('style');

style.type = 'text/css';
style.media = 'print';

if (style.styleSheet){
  style.styleSheet.cssText = css;
} else {
  style.appendChild(document.createTextNode(css));
}

head.appendChild(style);

window.print();
</script>

</body>
</html>