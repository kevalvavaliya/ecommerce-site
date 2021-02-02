<?php
     session_start();
     if(!isset($_SESSION['admin']))
     {
        header('location:index.php');
    }
    else{
        include '../connect.php';
        if(isset($_REQUEST['lc'])){
        $lname=$_REQUEST['lname'];
        $lcode=$_REQUEST['lcode'];
        $lcolor=$_REQUEST['lcolor'];
        $linch=$_REQUEST['linch'];
        $lmeter=$_REQUEST['lmeter'];
        $lprice=$_REQUEST['lprice'];
        $ltype=$_REQUEST['ltype'];
        $table=$_REQUEST['table'];
        $lc=$_REQUEST['lc'];

        
        $limage=$_FILES['limg']['tmp_name'];
        $img=$_FILES['limg']['name'];
        $move="../products/upload/".$img;
       // echo $move;
        move_uploaded_file($limage,$move);

        $sql="insert into ".$table." (lname,lcode,lcolor,linch,lmeter,lprice,ltype,limg) values ('".$lname."','".$lcode."','".$lcolor."','".$linch."','".$lmeter."','".$lprice."','".$ltype."','".$move."');";
        if($result=mysqli_query($conn,$sql))
        {?>
            <script>
            window.location.href = "productupdate.php?lc=<?php echo $lc; ?>";
        </script>
        <?php
            
            //header('location:productupdate.php?lc='.$lc);
        }
        else{
            echo "Insertion Failed";
        }
    }

if(isset($_REQUEST['yn'])){
             $yn=$_REQUEST['yn'];
            $yid=$_REQUEST['yid'];
            $ycode=$_REQUEST['ycode'];
            $ytype=$_REQUEST['ytype'];
            $ycolor=$_REQUEST['ycolor'];
            $yprice=$_REQUEST['yprice'];
            $table=$_REQUEST['table'];

    
    $limage=$_FILES['yimg']['tmp_name'];
    $img=$_FILES['yimg']['name'];
    $move="../products/upload/".$img;
    //echo $move;
    move_uploaded_file($limage,$move);

    $sql="insert into ".$table." (ycode,ycolor,yprice,ytype,yimg) values ('".$ycode."','".$ycolor."','".$yprice."','".$ytype."','".$move."');";
    if($result=mysqli_query($conn,$sql))
    {?>
        <script>
        window.location.href = "yarnupdate.php?yn=<?php echo $yn; ?>";
    </script>
    <?php
        
        //header('location:productupdate.php?lc='.$lc);
    }
    else{
        echo "Insertion Failed";
    }
}
}
?>