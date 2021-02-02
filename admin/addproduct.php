<?php
     session_start();
     if(!isset($_SESSION['admin']))
     {
        header('location:index.php');
    }
    else{
        include '../connect.php';
    if(isset($_REQUEST['lc'])){
        $table;
        $lc=$_REQUEST['lc'];
        if($lc=="mh")
        {$table="mlace";
         $name="Maharani";
        }
        else if($lc=="jq")
        {$table="jlace";
            $name="Jacquard";
        }
        else if($lc=="bn")
        {$table="blace";
            $name="Banarasi";
        }
        else if($lc=="rp")
        {$table="rlace";
            $name="Rapier";
        }
        else if($lc=="dy")
        {$table="dlace";
            $name="Dyeable";
        }

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        input{
            height:30px;
            width:200px;
            margin: 20px;
        }
    </style>
</head>
<body>
    <div class="frm">
        <form action="add.php?lc" method="post" enctype="multipart/form-data">
            <table>
                <tr><td>lace type</td><td><input type="text" name="ltype" value="<?php echo $name;?>"/></td></tr>
                <tr><td>lace name</td><td><input type="text" name="lname" required/></td></tr>
                <tr><td>lace image</td><td><input type="file" name="limg" required/></td></tr>
                <tr><td>lace code</td><td><input type="text" name="lcode" required/></td></tr>
                <tr><td>lace color</td><td><input type="text" name="lcolor" required/></td></tr>
                <tr><td>lace inch</td><td><input type="text" name="linch" required/></td></tr>
                <tr><td>lace meter</td><td><input type="text" name="lmeter" required/></td></tr>
                <tr><td>lace price</td><td><input type="text" name="lprice" required/></td></tr>
                <input type="hidden" name="lc" value="<?php echo $lc?>"/>
                <input type="hidden" name="table" value="<?php echo $table?>"/>
                <tr><td colspan="2"><input type="submit" value="Submit"/></td></tr>
            </table>
        </form>
    </div>
</body>
</html>

<?php
    }

else{
    $table;
    $yn=$_REQUEST['yn'];
    if($yn=="txk")
    {$table="texk";
        $name="150/0 Tex ketonic";
    }
    else if($yn=="txp")
    {$table="texp";
        $name="150/0 Tex polyster";
    }
    else if($yn=="rk")
    {$table="rotok";
        $name="150 roto ketonic";
    }
    else if($yn=="rp")
    {$table="rotop";
        $name="150 roto polyster";
    }
    else if($yn=="blk")
    {$table="brightlk";
        $name="150/72 bright lichi ketonic";
    }
    else if($yn=="blp")
    {$table="brightlp";
        $name="150/72 bright lichi polyster";
    }

?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>
    input{
        height:30px;
        width:200px;
        margin: 20px;
    }
</style>
</head>
<body>
<div class="frm">
    <form action="add.php?yn" method="post" enctype="multipart/form-data">
        <table>
            <tr><td>yarn type</td><td><input type="text" name="ytype" value="<?php echo $name;?>"/></td></tr>
            <tr><td>yarn image</td><td><input type="file" name="yimg" required/></td></tr>
            <tr><td>yarn code</td><td><input type="text" name="ycode" required/></td></tr>
            <tr><td>yarn color</td><td><input type="text" name="ycolor" required/></td></tr>
            <tr><td>yarn price</td><td><input type="text" name="yprice" required/></td></tr>
            <input type="hidden" name="yn" value="<?php echo $yn?>"/>
            <input type="hidden" name="table" value="<?php echo $table?>"/>
            <tr><td colspan="2"><input type="submit" value="Submit"/></td></tr>
        </table>
    </form>
</div>
</body>
</html>

<?php
  }
}
?>