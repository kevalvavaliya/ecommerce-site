<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../css/productview.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <script src="../js/jquery-3.5.1.js"></script>
    </head>
    <?php
    include 'yarnheader.php';
    include '../connect.php';
    $pid=$_REQUEST['pid'];
    $yn = $_REQUEST['yn'];

    if($yn=="txk")
    {
       $sql="select * from texk where yid='".$pid."';";
    }
    else if($yn=="txp")
    { 
        $sql="select * from texp where yid='".$pid."';";;
    } 
    else if($yn=="rk")
    {
        $sql="select * from rotok where yid='".$pid."';";
    } 
    else if($yn=="rp")
    {
        $sql="select * from rotop where yid='".$pid."';";
    } 
    else if($yn=="blk")
    {
        $sql="select * from brightlk where yid='".$pid."';";
    }
    else if($yn=="blp")
    {
        $sql="select * from brightlp where yid='".$pid."';";
    }
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);

?>
<body>
<div class="product-view-outer">
    <div class="product-view-inner">
        <div class="product-view-left">
            <div class="product-view-image">
              <a href="http://localhost/vishvas/products/<?php echo $row['yimg'];?>"><img class="view-image" src="<?php echo $row['yimg'];?>" /></a> 
            </div>
            <div class="poduct-view-image-content">
                <h3><span class="view-image-title"><?php echo $row['ycode']." ".$row['ytype']; ?></span>
            </div>
            <div class="order-outer">
                <div class="order-inner">
                <a href="https://api.whatsapp.com/send?phone=919825390043&text=Hello , I am intrested in buying your product <?php echo $row['ycode']." ".$row['ytype']." ".$row['ycolor'];?>" target="_blank"> <button class="order-button">BUY NOW</button></a>
                </div>
            </div>
        </div>
        <div class="product-view-right">
            <div class="view-right-title">
                <h2><span class="vrtitle ds1" style="font-size:32px;"><?php echo $row['ycode']." ".$row['ycolor']." color ".$row['ytype']." Thread Dyed yarn";?> </span></h2>
                <h2><span class="vrtitle ds1"><?php echo "";?> </span></h2><br>

                <h2><span class="vrtitle ds2" style="font-size:26px;"><?php echo $row['ycode']." ".$row['ycolor']." color ".$row['ytype']." Thread Dyed yarn";?>  
                <?php //echo "and ".$row["lmeter"]." meter long lace reel";?> </span></h2><br>


                <span class="lprice"><b><?php echo "₹".$row['yprice'];?></b></span>
                <div class="specification-outer">
                    <div class="specification-title">
                        <h2>Specifications</h2>
                    </div>
                    <div class="specification-content">
                        <table class="sptb" cellpadding="20">
                            <tr>
                                <td class="t3">Model Number</td>
                                <td class="t4"><?php echo $row['ycode'];?> </td>
                            </tr>
                            <tr>
                                <td class="t3">Yarn Type</td>
                                <td class="t4"><?php echo $row['ytype'];?></td>
                            </tr>
                            <tr>
                                <td class="t3">Color</td>
                                <td class="t4"><?php echo $row['ycolor'];?></td>
                            </tr>
                            <tr>
                                <td class="t3">Generic Name</td>
                                <td class="t4">Yarn/Thread</td>
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