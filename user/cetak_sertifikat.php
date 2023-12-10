
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
</style>
<body>

<?php 
        
    if (isset($_POST['cetak'])) {
        $breed=$_POST['breeder'];
        $alamat=$_POST['alamat'];
        $no_hp=$_POST['no_hp'];
        $ket=$_POST['ket'];
        $a=$_POST['1'];
        $b=$_POST['2'];
        $c=$_POST['3'];
        $d=$_POST['4'];
        $e=$_POST['5'];
        $f=$_POST['6'];
        $g=$_POST['7'];
        $h=$_POST['8'];
        $i=$_POST['9'];
        $j=$_POST['10'];
        $k=$_POST['11'];
        $l=$_POST['12'];
        $m=$_POST['13'];
        $n=$_POST['14'];
        $o=$_POST['15'];
           
        
    }
?>
    <div class="container">
        <div class="title">
     
        <h3><?php echo $breed ?></h3>
        <h6>Sertifikat Silsilah Merpati</h6>
        </div>
        <div class="row">
            <div class="col">
            <div class="pt"></div>
                    <div class="pt"></div>                    
                    <div class="pt"></div>                    
                    <div class="pt"></div>                    
                    <div class="pt"></div>                    
                    <div class="pt"></div>                                                  
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="row2" >
                        
                        <div class="col2" style="">
                        Ket.
                        <p>
                            <?php echo $ket?>
                        </p>
                        
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="pt"></div>
                    <div class="pt"></div>                    
                    <div class="pt"></div>                    
                    <div class="pt"></div>                                                  
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="row2" >
                        
                        <div class="col2" style="">
                        <?php echo $a?>
                        </div>
                    </div>
                   
            </div>
            <div class="col">
                    <div class="pt"></div>
                    <div class="pt"></div>                    
                    <div class="pt"></div>                    
                    <div class="pt"></div>                                                  
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="row2" >
                        <div class="col2" style="">
                        <i class="fa-solid fa-mars"></i>
                        </div>
                        <div class="col2" style="">
                        <?php echo $b?>
                        </div>
                    </div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>                    
                    <div class="pt"></div>                    
                    <div class="pt"></div>                    
                    <div class="pt"></div>                    
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="row2" >
                        <div class="col2" style="">
                        <i class="fa-solid fa-venus"></i>
                        <!-- /*betina*/ -->
                        </div>
                        <div class="col2" style="">
                        <?php echo $c?>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="pt"></div>
                    <div class="pt"></div>                    
                    <div class="pt"></div>
                    <div class="row2" >
                   
                        <div class="col2" style="">
                        <i class="fa-solid fa-mars"></i>
                        </div>
                        <div class="col2" style="">
                        <?php echo $d?>
                        </div>
                    </div>
                    <div class="pt"></div>
                    
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                   
                    <div class="pt"></div>
                    <div class="row2" >
                        <div class="col2" style="">
                        <i class="fa-solid fa-venus"></i>
                        <!-- /*betina*/ -->
                        </div>
                        <div class="col2" style="">
                        <?php echo $e?>
                        </div>
                    </div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="row2" >
                        <div class="col2" style="">
                        <i class="fa-solid fa-mars"></i>
                        </div>
                        <div class="col2" style="">
                        <?php echo $f?>
                        </div>
                    </div>
                    <div class="pt"></div>                    
                    <div class="pt"></div>                    
                    <div class="pt"></div>                    
                    <div class="pt"></div>                    
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="row2" >
                        <div class="col2" style="">
                        <i class="fa-solid fa-venus"></i>
                        <!-- /*betina*/ -->
                        </div>
                        <div class="col2" style="">
                        <?php echo $g?>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="row2" >
                        <div class="col2" style="">
                        <i class="fa-solid fa-mars"></i>
                        </div>
                        <div class="col2" style="">
                        <?php echo $h?>
                        </div>
                    </div>
                    <div class="pt"></div>
                    <div class="row2" >
                        <div class="col2" style="">
                        <i class="fa-solid fa-venus"></i>
                        <!-- /*betina*/ -->
                        </div>
                        <div class="col2" style="">
                        <?php echo $i?>
                        </div>
                    </div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="row2" >
                        <div class="col2" style="">
                        <i class="fa-solid fa-mars"></i>
                        </div>
                        <div class="col2" style="">
                        <?php echo $j?>
                        </div>
                    </div>
                    <div class="pt"></div>
                    <div class="row2" >
                        <div class="col2" style="">
                        <i class="fa-solid fa-venus"></i>
                        <!-- /*betina*/ -->
                        </div>
                        <div class="col2" style="">
                        <?php echo $k?>
                        </div>
                    </div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="row2" >
                        <div class="col2" style="">
                        <i class="fa-solid fa-mars"></i>
                        </div>
                        <div class="col2" style="">
                        <?php echo $l?>
                        </div>
                    </div>
                    <div class="pt"></div>
                    <div class="row2" >
                        <div class="col2" style="">
                        <i class="fa-solid fa-venus"></i>
                        <!-- /*betina*/ -->
                        </div>
                        <div class="col2" style="">
                        <?php echo $m?>
                        </div>
                    </div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="pt"></div>
                    <div class="row2" >
                        <div class="col2" style="">
                        <i class="fa-solid fa-mars"></i>
                        </div>
                        <div class="col2" style="">
                        <?php echo $n?>
                        </div>
                    </div>
                    <div class="pt"></div>
                    <div class="row2" >
                        <div class="col2" style="">
                        <i class="fa-solid fa-venus"></i>
                        <!-- /*betina*/ -->
                        </div>
                        <div class="col2" style="">
                        <?php echo $o?>
                        </div>
                    </div>
                
                
            </div>
            <p><i class="fa-solid fa-location-dot"></i> <?php echo $alamat ?></p>
            <p><i class="fa-solid fa-phone"></i></i><?php echo $no_hp ?></p>
            </div>

            <!-- <table>
                <tr>
                    <th>aaaa</th>
                    <th>aaaa</th>
                </tr>
                <tr>
                    <th>aaaa</th>
                    <th>aaaa</th>
                </tr>
                <tr>
                    <th>aaaa</th>
                    <th>aaaa</th>
                </tr>
                <tr>
                    <th>aaaa</th>
                    <th>aaaa</th>
                </tr>
               
            </table> -->


       
    </div>
    


   <script>
   window.print();
   </script>




</body>
</html>