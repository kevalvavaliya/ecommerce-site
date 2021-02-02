<?php
include 'connect.php';


for($x=70;$x<90;$x++)
{
    $sql="insert into blace (lprice,lmeter,linch,lcolor,lcode,lname,ltype,limg) values('40','20','2','redd','".$x."','bac','maharani','upload/f.jpg');";
    $result=mysqli_query($conn,$sql);
}
?>