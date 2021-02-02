<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../css/productview.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <script src="../js/jquery-3.5.1.js"></script>
    </head>
    <?php
    include 'maharanilaceheader.php';
    include '../connect.php';
    $pid=$_REQUEST['pid'];
    $lc = $_REQUEST['lc'];

    if($lc=="mh")
    {
       $sql="select * from mlace where lid='".$pid."';";
        $tb="mlace";
    }
    else if($lc=="jq")
    { 
        $sql="select * from jlace where lid='".$pid."';";;
    } 
    else if($lc=="bn")
    {
        $sql="select * from blace where lid='".$pid."';";
    } 
    else if($lc=="rp")
    {
        $sql="select * from rlace where lid='".$pid."';";
    } 
    else if($lc=="dy")
    {
        $sql="select * from dlace where lid='".$pid."';";
    }
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    
?>
<body>
<div class="product-view-outer">
    <div class="product-view-inner">
        <div class="product-view-left">
            <div class="product-view-image">
              <a href="http://localhost/vishvas/products/<?php echo $row['limg'];?>"><img class="view-image" src="<?php echo $row['limg'];?>" /></a> 
            </div>
            <div class="poduct-view-image-content">
                <h3><span class="view-image-title"><?php echo $row['lcode']." ".$row['lname']; ?></span>
            </div>
            <div class="order-outer">
                <div class="order-inner">
                <a href="https://api.whatsapp.com/send?phone=919825390043&text=Hello,I am intrested in buying your product <?php echo $row['lcode']." ".$row['lname'];?>" target="_blank"> <button class="order-button">BUY NOW</button></a>
                </div>
            </div>
        </div>
        <div class="product-view-right">
            <div class="view-right-title">
                <h2><span class="vrtitle ds1" ><?php echo $row['lcode']." ".$row['lcolor']." color ".$row['lname']." border with ".$row['linch']." inch width";?> </span></h2>
                <h2><span class="vrtitle ds1"><?php echo "and ".$row["lmeter"]." meter long lace reel";?> </span></h2><br>

                <h2><span class="vrtitle ds2"><?php echo $row['lcode']." ".$row['lcolor']." color ".$row['lname']." border with ".$row['linch']." inch width";?> 
                <?php echo "and ".$row["lmeter"]." meter long lace reel";?> </span></h2><br>


                <span class="lprice"><b><?php echo "₹".$row['lprice'];?></b></span>
                <div class="specification-outer">
                    <div class="specification-title">
                        <h2>Specifications</h2>
                    </div>
                    <div class="specification-content">
                        <table class="sptb" cellpadding="20">
                            <tr>
                                <td class="t3">Model Number</td>
                                <td class="t4"><?php echo $row['lcode'];?> </td>
                            </tr>
                            <tr>
                                <td class="t3">Lace Type</td>
                                <td class="t4"><?php echo $row['ltype'];?></td>
                            </tr>
                            <tr>
                                <td class="t3">Weave Type</td>
                                <td class="t4">Knitted</td>
                            </tr>
                            <tr>
                                <td class="t3">Color</td>
                                <td class="t4"><?php echo $row['lcolor'];?></td>
                            </tr>
                            <tr>
                                <td class="t3">Width</td>
                                <td class="t4"><?php echo $row['linch'];?>&nbspinch</td>
                            </tr>
                            <tr>
                                <td class="t3">Length</td>
                                <td class="t4"><?php echo $row['lmeter'];?>&nbspmeter</td>
                            </tr>
                            <tr>
                                <td class="t3">Number of lace reels</td>
                                <td class="t4">1</td>
                            </tr>
                            <tr>
                                <td class="t3">Generic Name</td>
                                <td class="t4">Lace/Narrow Fab</td>
                            </tr>
                            <tr>
                                <td class="t3">Country of origin</td>
                                <td class="t4">India</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
include 'maharanilacefooter.php';
?>
<script src="https://kit.fontawesome.com/b1cb067a33.js" crossorigin="anonymous"></script>
</body>
</html>