<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/product.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b1cb067a33.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <div class="header">
        <div class="header-container">
            <div class="hleft">
                <div class="header-logo">
                    <img class="hlogo" src="images/logo2.jpg"/>
                </div>   
                <div class="tinted-block t1"></div>
            </div>
            <div class="hright">
                <h1>Laces</h1>
                <img src="images/line.png">
            </div>
            <div class="hnav">
            <div class="tinted-block t2"></div>
            <div class="navbar">
                    <ul type="none">
                        <li>
                            <div class="nav1 navh">
                                <a href="index.php#home">
                                    <span>Home</span>
                                </a>
                            </div>
                        </li>
                        
                        <li>
                            <div class="nav1 dropdown">
                                <span>Products</span>
                                <i class="fas fa-caret-down"></i>
                                <div class="drop-content">
                                    <div class="content1">
                                     <a href="#"><span>Laces</span></a>
                                    </div>
                                    <div class="content2">
                                    <a href="yarn.php"><span>Yarn</span></a>
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
                 <span><a href="index.php#home">Home</a></span>     
                </div>
                <div class="item i2">
                 <span>Products<i class="fas fa-caret-down"></i></span><br>
                 <span style="color: #050a30; font-size:18px"><a href="#">Laces</a></span><br>
                 <span style="color: #050a30;font-size:18px"><a href="yarn.php">Yarns</a></span>
                </div>
                
            </div> 
            </div>
		</nav> 
    </header>
</div>


<div class="products">
    <div class="product-lace1 pcontainer">
        <div class="lace1 lc">
            <div class="product-image">
                 <img class="pimg" src="images/maharani.jpg"/>
                 <div class="product-hover"></div>
            </div>
            <br>
            <h3 class="ptitle">Latest laces</h3>
        </div>
        <div class="lace2 lc">
            <a href="products/laces.php?lc=mh">
                <div class="product-image">
                 <img class="pimg" src="images/maharani2.jpeg"/>
                 <div class="product-hover"></div>
            </div><br>
            <h3 class="ptitle">Maharani Laces</h3>
            </a>
        </div>
         
        <div class="lace3 lc">
        <a href="products/laces.php?lc=jq">
            <div class="product-image">
                 <img class="pimg" src="images/maharani.jpg"/>
                 <div class="product-hover"></div>
            </div><br>
          <h3 class="ptitle">Jacquared Laces</h3></a>
        </div>
        
    </div> 


    <div class="product-lace2 pcontainer">
        <div class="lace1 lc">
        <a href="products/laces.php?lc=dy">
            <div class="product-image">
                 <img class="pimg" src="images/maharani.jpg"/>
                 <div class="product-hover"></div>
            </div>
            <br>
            <h3 class="ptitle">Dyeable laces</h3></a>
        </div>
        <div class="lace2 lc">
        <a href="products/laces.php?lc=rp">
            <div class="product-image">
                 <img class="pimg" src="images/maharani2.jpeg"/>
                 <div class="product-hover"></div>
            </div>
            <br>
            <h3 class="ptitle">Rapier Laces</h3></a>
        </div>
        <div class="lace3 lc">
        <a href="products/laces.php?lc=bn">
            <div class="product-image">
                 <img class="pimg" src="images/maharani.jpg"/>
                 <div class="product-hover"></div>
            </div><a><br>
          <h3 class="ptitle">Banarasi Laces</h3></a>
        </div>
    </div> 
</div>

<script src="js/script.js"></script>
</body>
</html>