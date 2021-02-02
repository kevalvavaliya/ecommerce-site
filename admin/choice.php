<?php
     session_start();
     if(!isset($_SESSION['admin']))
     {
        header('location:index.php');
    }
    else{
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="admin.css"/>

    <style>
        button{
            height:30px;
            width:100px;
            margin-left: 20px;
        }
        ul{
            display: inline-flex;
        }
        @media only screen and (max-width:425px) {
            ul{
                flex-direction: column;
            }
            ul>li{
                margin-bottom: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="ptitle">
     <h1>Laces:</h1><br>
    </div>
    <div class="pbuttons">
        <ul type="none">
            <li><button onclick="location.href='productupdate.php?lc=mh'">Maharani Lace</button></li>
            <li><button onclick="location.href='productupdate.php?lc=jq'">Jacquared Lace</button></li>
            <li><button onclick="location.href='productupdate.php?lc=dy'">Dyeable Lace</button></li>
            <li><button onclick="location.href='productupdate.php?lc=rp'">Rapier Lace</button></li>
            <li><button onclick="location.href='productupdate.php?lc=bn'">Banarasi Lace</button></li>
        </ul>
    </div>
    <div class="ptitle">
     <h1>Yarns:</h1><br>
    </div>
    <div class="pbuttons">
        <ul type="none">
            <li><button onclick="location.href='yarnupdate.php?yn=txk'">150/0 Tex ketonic</button></li>
            <li><button onclick="location.href='yarnupdate.php?yn=txp'">150/0 Tex Polyster</button></li>
            <li><button onclick="location.href='yarnupdate.php?yn=rk'">150 roto ketonic</button></li>
            <li><button onclick="location.href='yarnupdate.php?yn=rp'">150 roto polyster</button></li>
            <li><button onclick="location.href='yarnupdate.php?yn=blk'">150/72 bright lichi ketonic</button></li>
            <li><button onclick="location.href='yarnupdate.php?yn=blp'">150/72 bright lichi polyster</button></li>
        </ul>
    </div>
<?php
    }
?>
</body>
</html>
