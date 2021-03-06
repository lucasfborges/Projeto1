<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <meta name="description" content="Your description">
        <meta name="keywords" content="Your keywords">
        <meta name="author" content="Your name">
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/superfish.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>    
        <script type="text/javascript" src="js/touchTouch.jquery.js"></script> 

        <script type="text/javascript">if ($(window).width() > 1024) {
                document.write("<" + "script src='js/jquery.preloader.js'></" + "script>");
            }</script>
        <script>
            jQuery(window).load(function() {
                $x = $(window).width();
                if ($x > 1024)
                {
                    jQuery("#content .row").preloader();
                }
                jQuery('.magnifier').touchTouch();
                jQuery('.spinner').animate({'opacity': 0}, 1000, 'easeOutCubic', function() {
                    jQuery(this).css('display', 'none')
                });
            });

        </script>

        <!--[if lt IE 8]>
                <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
        <![endif]-->
        <!--[if (gt IE 9)|!(IE)]><!-->
        <!--<![endif]-->
        <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>  
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
  <![endif]-->
    </head>

    <body>
        <div class="spinner"></div>
        <!--============================== header =================================-->
        <header>
            <?php
            include ('menuPrincipal.php');
            ?>
        </header>
    <div class="bg-content" >       
            <!--============================== content =================================-->  
            <br><br><br>
            <li>
        <form class="form-inline" name ="loginform" method="post" action="userauthentication.php">
            <input type="text" name="login" oninput="vCPF(this)" class="input-small" placeholder="Login">
            <input type="password" name="senha" class="input-small" placeholder="Password">
            <button type="submit" class="btn-small btn-success">Entrar</button>
        </form>      
    </li>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <!--============================== footer =================================-->
    <footer>
        <div class="container clearfix">
            <ul class="list-social pull-right">
                <li><a class="icon-1" href="#"></a></li>
                <li><a class="icon-2" href="#"></a></li>
                <li><a class="icon-3" href="#"></a></li>
                <li><a class="icon-4" href="#"></a></li>
            </ul>
         </div>
    </footer>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
