<?php
{?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/product.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="header">
        <div class="header-container">
            <div class="hleft">
                <div class="header-logo">
                    <img class="hlogo" src="../images/logo2.gif"/>
                </div>   
                <div class="tinted-block t1"></div>
            </div>
            <div class="hright">
                <h2>Dyed</h2>
                <h3>Yarns</h3>
                <img src="../images/line.png">
            </div>
            <div class="hnav">
            <div class="tinted-block t2"></div>
            <div class="navbar">
                    <ul type="none">
                        <li>
                            <div class="nav1 navh">
                                <a href="../index.php#home">
                                    <span>Home</span>
                                </a>
                            </div>
                        </li>
                        
                        <li>
                            <div class="nav1 dropdown">
                                <span>Products</span>
                                <i class="fa fa-caret-down"></i>
                                <div class="drop-content">
                                    <div class="content1">
                                     <a href="../lace.php"><span>Laces</span></a>
                                    </div>
                                    <div class="content2">
                                    <a href="../yarn.php"><span>Yarn</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header> 
<!-------------------------------responsive header----------------------------------------------->
<div class="responsive-header" id=rh>
<header> 
		<div class="menu-btn"> 
			<div class="btn-line"></div> 
			<div class="btn-line"></div> 
			<div class="btn-line"></div> 
		</div> 

		<nav class="menu"> 
			<div class="menu-branding"> 
            </div>
            <div class="navigation-slider">
			<div class="menu-nav"> 
                <div class="item i1">
                 <span><a href="../index.php#home">Home</a></span>     
                </div>
                <div class="item i2">
                 <span>Products<i class="fas fa-caret-down"></i></span><br>
                 <span style="color: #050a30; font-size:18px"><a href="#">Laces</a></span><br>
                 <span style="color: #050a30;font-size:18px"><a href="../yarn.php">Yarns</a></span>
                </div>
                
            </div> 
            </div>
		</nav> 
    </header>
</div>

<script src="../js/script.js"></script>
</body>
</html>
<?php
}?>