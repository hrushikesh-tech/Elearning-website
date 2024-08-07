<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
<title>E-Learning</title>
<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" href="images/apple-touch-icon.png"/>
<link rel="apple-touch-icon" sizes="57x57" href="assets/images/apple-touch-icon-57x57.png"/>
<link rel="apple-touch-icon" sizes="72x72" href="assets/images/xapple-touch-icon-72x72.png.pagespeed.ic.lf5d8kCpOf.png"/>
<link rel="apple-touch-icon" sizes="76x76" href="assets/images/xapple-touch-icon-76x76.png.pagespeed.ic.ATZZpSeito.png"/>
<link rel="apple-touch-icon" sizes="114x114" href="assets/images/xapple-touch-icon-114x114.png.pagespeed.ic.Fi5O5s2tzL.png"/>
<link rel="apple-touch-icon" sizes="120x120" href="assets/images/xapple-touch-icon-120x120.png.pagespeed.ic.uPQH0sygdV.png"/>
<link rel="apple-touch-icon" sizes="144x144" href="assets/images/xapple-touch-icon-144x144.png.pagespeed.ic.yZ9-_sm5OF.png"/>
<link rel="apple-touch-icon" sizes="152x152" href="assets/images/xapple-touch-icon-152x152.png.pagespeed.ic.gThaVrKtXF.png"/>
<link rel="apple-touch-icon" sizes="180x180" href="assets/images/xapple-touch-icon-180x180.png.pagespeed.ic.Q8Pmsj5fQM.png"/>
<link rel="stylesheet" type="text/css" href="assets/rs-plugin/css/A.settings.css.pagespeed.cf.xeOyGChsgq.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="assets/A.fonts%2c%2c_font-awesome-4.3.0%2c%2c_css%2c%2c_font-awesome.min.css%2bcss%2c%2c_bootstrap.css%2bcss%2c%2c_animate.css%2cMcc.kSNwpaaMDX.css.pagespeed.cf.w2G3xGgFf0.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/A.menu.css.pagespeed.cf.0_hLwXzYkZ.css">
<link rel="stylesheet" type="text/css" href="assets/css/A.carousel.css%2bbxslider.css%2cMcc.jgeTii-u52.css.pagespeed.cf.STKSIMl7GF.css"/>
<link rel="stylesheet" type="text/css" href="assets/A.style.css%2bcss%2c%2c_custom.css%2cMcc.HvWh1qoob-.css.pagespeed.cf.pWH5huNcWh.css"/>
</head>
<body>
<header class="header">
<div class="container">
<div class="hovermenu ttmenu">
<div class="navbar navbar-default" role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="fa fa-bars"></span>
</button>
<div class="logo">
<a class="navbar-brand" href="index.php"><img src="assets/images/xlogo.png.pagespeed.ic.vap6Ukaf0i.png" alt=""></a>
</div>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li class="dropdown ttmenu-half"><a href="index.php" data-toggle="dropdown" class="dropdown-toggle">Home</a></li>
<li class="dropdown ttmenu-half"><a href="about.php" data-toggle="dropdown" class="dropdown-toggle">About Us</a></li>
<li class="dropdown ttmenu-half"><a href="courses.php" data-toggle="dropdown" class="dropdown-toggle">Courses</a></li>
<li class="dropdown ttmenu-half"><a href="contact.php" data-toggle="dropdown" class="dropdown-toggle">Contact</a></li>
</ul>
<?php
    if(!isset($_COOKIE["usertype"]))
    {
        echo '<ul class="nav navbar-nav navbar-right">
        <li><a class="btn btn-primary" href="login.php"><i class="fa fa-sign-in"></i> User Login</a></li>
        <li><a class="btn btn-primary" href="adminlogin.php"><i class="fa fa-sign-in"></i> Admin Login</a></li>
        </ul>';
    }
    else{
        echo '<ul class="nav navbar-nav navbar-right">';
        
        if($_COOKIE["usertype"] == "Admin")
        {
            echo '<li><a class="btn btn-primary" href="admin-home.php"><i class="fa fa-home"></i> Home</a></li>';
        }
        if($_COOKIE["usertype"] == "User")
        {
            echo '<li><a class="btn btn-primary" href="user-home.php"><i class="fa fa-home"></i> Home</a></li>';
        }
        echo '<li><a class="btn btn-primary" href="logout.php"><i class="fa fa-sign-in"></i> Logout</a></li>
        </ul>';
    }
?>
</div>
</div>
</div>
</div>
</header>