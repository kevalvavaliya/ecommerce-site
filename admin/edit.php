<?php
     session_start();
     if(!isset($_SESSION['admin']))
     {
        header('location:index.php');
    }   
else
{
         include '../connect.php';
        if(isset($_REQUEST['lc'])){
        $lid=$_REQUEST['lid'];
        $lname=$_REQUEST['lname'];
        $lcode=$_REQUEST['lcode'];
        $lcolor=$_REQUEST['lcolor'];
        $linch=$_REQUEST['linch'];
        $lmeter=$_REQUEST['lmeter'];
        $lprice=$_REQUEST['lprice'];
        $table=$_REQUEST['table'];
        $lc=$_REQUEST['lc'];
        $limage=$_FILES['limg']['tmp_name'];
        $img=$_FILES['limg']['name'];
        $move="../products/upload/".$img;

        $move="../products/upload/".$img;
        move_uploaded_file($limage,$move);

        $sql="update ".$table." SET lname='$lname',lcode='$lcode',lcolor='$lcolor',linch='$linch',lmeter='$lmeter',lprice='$lprice',limg='$move' where lid=$lid;";

        if($result=mysqli_query($conn,$sql))
        { 
            header('location:productupdate.php?lc='.$lc);
        }
        else
            header('location:productupdate.php?err=2&lc='.$lc);

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

            $move="../products/upload/".$img;
            move_uploaded_file($limage,$move);
    
            $sql="update ".$table." SET ycode='$ycode',ycolor='$ycolor',yprice='$yprice',yimg='$move' where yid=$yid;";
            echo $sql;
            if($result=mysqli_query($conn,$sql))
             { 
                  header('location:yarnupdate.php?yn='.$yn);
               }
       // else
          //  header('location:yarnupdate.php?err=2&yn='.$yn);
    
        }
    
        

}
?>