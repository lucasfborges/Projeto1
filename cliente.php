<?php
include("conexao.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Aluno</title>
        <meta charset="utf-8">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <meta name="description" content="Your description">
        <meta name="keywords" content="Your keywords">
        <meta name="author" content="Your name">
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/superfish.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script src="js/forms.js"></script>
        <script>
            jQuery(window).load(function() {
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
        <?php
        include ('menuPrincipal.php');
        ?>
    </header>
    <div class="bg-content"> 
        <!--============================== content =================================-->


        <div class="bs-docs-example">            
            <div class="tabbable tabs-left" >
                <ul class="nav nav-tabs">
                    <h3 style="text-align: center">Menu</h3>
                    <br><br><br>
                    <li class="active">
                        <a data-toggle="tab" href="#lA">
                            <strong>Marcar Consulta</strong>
                        </a>
                    </li>
                    <li class="">
                        <br>                        
                        <a data-toggle="tab" href="#lB">
                            <strong>Desmarcar Consulta</strong>
                        </a>
                    </li>
                    <li class="">
                        <br>
                        <a data-toggle="tab" href="#lC">
                            <strong>Consultas Agendadas</strong>
                        </a>
                    </li>
                    <li class="">
                        <br>
                        <a data-toggle="tab" href="#lC">
                            <strong>Cirurgias Agendadas</strong>
                        </a>
                    </li>
                    <br><br><br><br><br><br>
                </ul>

                <div class="tab-content">
                    <div id="lA" class="tab-pane active">
                        <p>
                            Estou na Seção A
                        </p>
                    </div>
                    <div id="lB" class="tab-pane">
                        <p>
                            Olá, Estou na seção B
                        </p>
                    </div>
                    <div id="lC" class="tab-pane">
                        <p>
                            E ai garota, estou na Seção C
                        </p>
                    </div>
                </div>
            </div>
            <!--
        
             /tabbable 
        
            -->

        </div>

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
            <div class="privacy pull-left">Website Template designed by <a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">TemplateMonster.com</a> </div>
        </div>
    </footer>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>