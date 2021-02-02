<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="admin.css"/>
</head>
<body>
    <div class="login-outer">
        <div class="login-inner">
            <div class="form-logo">
                <img class="lgo" src="../images/logo2.jpg">
            </div>
            <div class="login-form">
                <form class="lform" action="admin_db.php" name="adform" method="post">
                    <input  class="finput" type="email" placeholder="Enter email" name="em" required><br>
                    <input class="finput"  type="password" placeholder="Enter password" name="ps" required><br>
                    <input class="sbutton" type="submit" value="SUBMIT">
                </form>
            </div>
    </div>

    <script type="text/javascript">
	<?php
        if(isset($_GET['er']))
        {?>
            alert('Incorect details');
     <?php   }
    ?>
</script>
</body>
</html>