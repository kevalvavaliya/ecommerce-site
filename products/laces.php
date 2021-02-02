<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../css/laces.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="../js/jquery-3.5.1.js"></script>
    </head>
<?php
include 'maharanilaceheader.php';
include '../connect.php';
?>
<body>

<!-----------------Searchbox------------------------------------------------------------------------>
<div class="search-outer">
    <div class="search-box">
        <form>
         <div class="searchbox">
             <input type="text" placeholder="Search products" name="schpro"/>
             <div class="search-button">
                 <button><i class="fa fa-search"></i><button>
             </div>
         </div>
        </form>
    </div>
</div>

<!----------------------pagination------------------------------------------------------------------->
<?php
     $totalpage=0;
     $perpage=11;
     $perrow=4;
     $lc=$_REQUEST['lc'];
     $tb;
     $pg;

  error_reporting(0);


  //Chosing Tables
  if($lc=="mh")
  {
    $sql="select count(*) as total from mlace;";
   $tb="mlace";
  }
  else if($lc=="jq")
  { 
   $sql="select count(*) as total from jlace;";
   $tb="jlace";
  } 
  else if($lc=="bn")
  {
    $sql="select count(*) as total from blace;";
   $tb="blace";
  } 
  else if($lc=="rp")
  {
    $sql="select count(*) as total from rlace;";
    $tb="rlace";
  } 
  else if($lc=="dy")
  {
    $sql="select count(*) as total from dlace;";
    $tb="dlace";
  }


 
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
  $totalpage=$row['total']/(($perpage-1)*4);
  $page=1;
  $totalproducts=$row['total'];
  if(isset($_GET['page']))
  {
    $page=$_GET['page'];
  }
   $start=($page-1)*$perpage;
    
   $sql1="select * from ".$tb." order by lid desc limit $start,$perpage;";
   $result=mysqli_query($conn,$sql1);
   $i=$start;
?>   
<div class="lace-container-outer">
    <div class="lace-container-inner">
        <?php
             
             while($row1=mysqli_fetch_assoc($result))
            {   error_reporting(0);
                $start1=($i-1)*$perrow;
                $sql2="select * from ".$tb." order by lid desc limit $start1,$perrow;";
                $result2=mysqli_query($conn,$sql2);
                $i++;
                while($row2=mysqli_fetch_assoc($result2)){
                     ?>
               <a href ="productview.php?lc=<?php echo $lc;?>&pid=<?php echo $row2['lid'];?>" ><div class="laces">
                    <div class="limg">
                        <img class="lace-image" src="<?php echo $row2['limg'];?>"/>
                    </div>
                    <div class="lcontent">
                        <span class="ltitle"><?php echo $row2['lcode']." ".$row2['lname']?></span><br>
                        <span class="ldesc"><?php echo $row2['linch']." inches ,".$row2['lmeter']." meter "?></span><br>
                        <span class="lcolor"><?php echo $row2['lcolor'];?></span><br>
                        <span class="lprice"><b><?php echo "₹".$row2['lprice'];?></b></span>
                    </div>
                </div></a>
                <?php 
            } 
        }?>
    </div>
</div>
<div class="page-button-outer">
    <div class="page-button-inner">
         <div class="page-button">
            <a href="#"><button class="pgbtn">&laquo;</button></a>
        </div> 
        <?php 
        for($j=0;$j<=$totalpage;$j++)
        { 
            if($page==$j+1)
            {
            ?>
                <div class="page-button">
                     <a href="laces.php?lc=<?php echo $lc;?>&page=<?php echo $j+1;?>"><button class="pgbtn pgbtn-selected" id="pbtn"><?php echo $j+1;?></button></a>
                </div>  
         <?php    
            }
            else{?>
                <div class="page-button">
                     <a href="laces.php?lc=<?php echo $lc;?>&page=<?php echo $j+1;?>"><button class="pgbtn" id="pbtn"><?php echo $j+1;?></button></a>
                </div>  
         <?php  }
       } ?>
       <div class="page-button">
            <a href="#"><button class="pgbtn">&raquo;</button></a>
        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/b1cb067a33.js" crossorigin="anonymous"></script>
<?php
include 'maharanilacefooter.php';
?>
</body>
</html>