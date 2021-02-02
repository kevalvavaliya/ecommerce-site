<?php
     session_start();
     if(!isset($_SESSION['admin']))
     {
        header('location:index.php');
    }
    else{
        include '../connect.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    
        th{
            padding:20px;
        }
        img{
            height:200px;
            width:300px;
        }
        td{
            padding:30px;
            text-align: center;
        }
        button,.in{
            width:100px;
            height: 30px;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left:40px;
        }
        .balign{
            display:inline-flex;
        }
    </style>
</head>
<body>
    <div>
        <?php
            error_reporting(0);
            $lc=$_REQUEST['yn'];
            $table;
            $name;
            if($lc=="txk")
            {$table="texk";
             $name="150/0 Tex ketonic";
            }
            else if($lc=="txp")
            {$table="texp";
                $name="150/0 Tex polyster";
            }
            else if($lc=="rk")
            {$table="rotok";
                $name="150 roto ketonic";
            }
            else if($lc=="rp")
            {$table="rotop";
                $name="150 roto polyster";
            }
            else if($lc=="blk")
            {$table="brightlk";
                $name="150/72 bright lichi ketonic";
            }
            else if($lc=="blp")
            {$table="brightlp";
                $name="150/72 bright lichi polyster";
            }

            $sql="select * from ".$table;
            $result=mysqli_query($conn,$sql);

        ?>

    <div style="width:100%;">
        <h1><?php echo $name;?></h1>
        <?php
        if(isset($_REQUEST['error']))
        {
            echo "<h3 style='color:red;'>select at least one product</h3>";
        }
        if(isset($_REQUEST['err']))
        {
            echo "<h3 style='color:red;'>Edit failure</h3>";
        }
        ?>
        <form action="yarnupdate.php?src=1" method="get">
            <input type="text" name="search" placeholder="Enter lace code" />
            <input type="submit" value="search">
        </form>
    </div>
    <div class="tb">
        <div class="balign">
        <a href="addproduct.php?yn=<?php echo $lc?>"><button>Add product</button></a>
        <form action="editdelete.php" method="post">
            <input type="hidden" name="tbname" value="<?php echo $table;?>"/>
            <input type="hidden" name="yn" value="<?php echo $lc;?>"/>
            <input class="in"  type='submit' name="delete" value='Delete Product'/>
            <input class="in" type='submit' name="edit" value='Edit Product'/> 
        </div>
        <table border="1px">
        <tr>
        <th></th>
        <th>ID</th>
        <th>Type</th>
        <th>Image</th>
        <th>Code</th>
        <th>Color</th>
        <th>Price</th>
        </tr>
        <?php

        while($row=mysqli_fetch_assoc($result))
        {?>
            <tr><td><input type="checkbox" name='ch[]' value=<?php echo $row['yid']; ?> ></td>
        <?php
            echo"<td>".$row['yid']."</td>";
            echo "<td>".$row['ytype']."</td>";
            echo "<td><img src=".$row['yimg']."></td>";
            echo "<td>".$row['ycode']."</td>";
            echo "<td>".$row['ycolor']."</td>";
            echo "<td>₹".$row['yprice']."</td>";
            echo "<tr>";
        }
        ?>

        </table>
    </form>
    </div>
</div>
</body>
</html>

<?php
    }
?>