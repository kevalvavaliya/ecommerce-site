<?php
     session_start();
     if(!isset($_SESSION['admin']))
     {
        header('location:index.php');
    }
    else{
        include '../connect.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <style>
        .inp{
            
            font-size: 30px;
            margin:10px 20px;
        }
        .input-l{
            height:30px;
            width:150px;
            margin:10px 20px;
        }
        .f{
            text-align:justify;
        }
    </style>
 </head>
<body>
<?php
$table=$_REQUEST['tbname'];
if(isset($_REQUEST['lc']))
    $lc=$_REQUEST['lc'];
if(isset($_REQUEST['yn']))
    $yn=$_REQUEST['yn'];
    
if(isset($_POST['delete']))
{
    if(!empty($_REQUEST['ch']))
    {
        foreach($_REQUEST['ch'] as $check)
         {
            if(isset($_REQUEST['lc'])){   
           $sql="delete from ".$table." where lid=$check;";
            mysqli_query($conn,$sql);
            ?>
            <script>
                window.location.href = "productupdate.php?lc=<?php echo $lc; ?>";
            </script>
        <?php
            }
            if(isset($_REQUEST['yn'])){
           $sql="delete from ".$table." where yid=$check;";
            mysqli_query($conn,$sql);
                    
            //header('location:productupdate.php?lc='.$lc);
     
        ?>
        <script>
            window.location.href = "yarnupdate.php?yn=<?php echo $yn; ?>";
        </script>
    <?php     
        }
     }
    }
    else
    {
        if(isset($_REQUEST['lc'])){
        ?>
        <script>
            window.location.href = "productupdate.php?error=1&lc=<?php echo $lc; ?>";
        </script>
    <?php
        }
        if(isset($_REQUEST['yn'])){
            ?>
            <script>
                window.location.href = "yarnupdate.php?error=1&yn=<?php echo $yn; ?>";
            </script>
    <?php
       // header('location:productupdate.php?error=1&lc='.$lc);
        
    }
  }
}
else
   {

    if(!empty($_REQUEST['ch']))
      {
        if(isset($_REQUEST['lc'])){
       foreach($_REQUEST['ch'] as $check)
        {

            $sql="select * from ".$table." where lid=$check;";
            $result=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($result))
            {
             ?>   
             <div class="f">
                <form class="f" action="edit.php" method="post" enctype="multipart/form-data"> 
                <table>
                <tr><td><span class="inp">Image</span></td><td><input class="input-l" type="file" name="limg" required/></td></tr>
                <tr><td><span class="inp">Name</span></td><td><input class="input-l" type="text" name="lname" value="<?php echo $row['lname'];?>"/></td></tr>
                <tr><td><span class="inp">Type</span></td><td><input class="input-l" type="text" name="ltype" value="<?php echo $row['ltype'];?>" disabled/></td></tr>
                <tr><td><span class="inp">Code</span></td><td><input class="input-l" type="text" name="lcode" value="<?php echo $row['lcode'];?>"/></td></tr>
                <tr><td><span class="inp">Color</span></td><td><input class="input-l" type="text" name="lcolor" value="<?php echo $row['lcolor'];?>"/></td></tr>
                <tr><td><span class="inp">Inch</span></td><td><input class="input-l" type="text" name="linch" value="<?php echo $row['linch'];?>"/></td></tr>
                <tr><td><span class="inp">meter</span></td><td><input class="input-l" type="text" name="lmeter" value="<?php echo $row['lmeter'];?>"/></td></tr>
                <tr><td> <span class="inp">price</span></td><td><input class="input-l" type="text" name="lprice" value="<?php echo $row['lprice'];?>"/></td></tr>
                <input type="hidden" name="table" value="<?php echo $table;?>"/>
                <input type="hidden" name="lc" value="<?php echo $lc;?>"/>
                <input class="input-l" type="hidden" name="lid" value="<?php echo $row['lid'];?>"/>
                <tr><td colspan="2"  style="text-align:center;"><input style="height:40px;width:90px;" type="submit"/></td>
               </table>
            </div>
             <?php
            } 
        }
    }
            
            if(isset($_REQUEST['yn'])){
             foreach($_REQUEST['ch'] as $check)
                {
                $sql="select * from ".$table." where yid=$check;";
                $result=mysqli_query($conn,$sql);
              while($row=mysqli_fetch_assoc($result))
                {
                 ?>   
                 <div class="f">
                    <form class="f" action="edit.php" method="post" enctype="multipart/form-data"> 
                    <table>
                    <tr><td><span class="inp">Image</span></td><td><input class="input-l" type="file" name="yimg" required/></td></tr>
                    <tr><td><span class="inp">Type</span></td><td><input class="input-l" type="text" name="ytype" value="<?php echo $row['ytype'];?>" disabled/></td></tr>
                    <tr><td><span class="inp">Code</span></td><td><input class="input-l" type="text" name="ycode" value="<?php echo $row['ycode'];?>"/></td></tr>
                    <tr><td><span class="inp">Color</span></td><td><input class="input-l" type="text" name="ycolor" value="<?php echo $row['ycolor'];?>"/></td></tr>
                    <<tr><td> <span class="inp">price</span></td><td><input class="input-l" type="text" name="yprice" value="<?php echo $row['yprice'];?>"/></td></tr>
                    <input type="hidden" name="table" value="<?php echo $table;?>"/>
                    <input type="hidden" name="yn" value="<?php echo $yn;?>"/>
                    <input class="input-l" type="hidden" name="yid" value="<?php echo $row['yid'];?>"/>
                    <tr><td colspan="2"  style="text-align:center;"><input style="height:40px;width:90px;" type="submit"/></td>
                   </table>
                </div>
            <?php

         }   
      }
    }
}
    else{
        if(isset($_REQUEST['lc'])){
    ?>
        <script>
            window.location.href = "productupdate.php?err=1&lc=<?php echo $lc; ?>";
        </script>
    <?php
        }
        if(isset($_REQUEST['yn'])){
    ?>
         <script>
         window.location.href = "yarnupdate.php?err=1&lc=<?php echo $yn; ?>";
         </script>
    <?php
        }
    }
?>
</body>
<?php } } ?>