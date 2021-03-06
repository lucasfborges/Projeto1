<!DOCTYPE html>
<?php
include("conexao.php");
session_start();
?>
<html lang="en">
    <head>
        <title>Cadastro</title>
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
            <div class="container">
                <h3>Cadastrar-se</h3>
            
            </div>
            <form action="#" method="post" onsubmit="alert('Cliente cadastrado com sucesso!')">
                <fieldset class="container">
                    
                    <div>
                        <article class="span6">
                        <h5 class="color-1">Nome</h5>
                        <input type="text" name=nome id="nome" maxlength="50" required="true" placeholder="Nome">
                        <h5 class="color-1">Email</h5>
                        <input type="email" name=email id="email" maxlength="50" required="true" placeholder="Email">                
                        <h5 class="color-1">Cpf</h5>
                        <input name="cpf" id="cpf" required="true" oninput="vCPF(this)" placeholder="Cpf">                        
                        </article>
                        <h5 class="color-1">Login</h5>
                        <input type="text" name=login id="login" maxlength="50" required="true" placeholder="Login">
                        <h5 class="color-1">Senha</h5>
                        <input type="password" name=senha id="senha" maxlength="50" required="true" placeholder="Senha">
                    </div>
                    <br>   

                </fieldset>
                <input class="btn btn-large btn-success" type=submit name=enviar class=submit value="Enviar">
            </form>
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

    <?php
    if (isset($_POST['enviar'])) {
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $nome = $_POST['nome'];        
               
               
        $sql = "INSERT INTO pessoa (login,password,TIPO_USUARIO,nome,email,cpf) VALUES ('".$login."', '".$senha."','1', '".nome."', '".$email."', '".$cpf."')";
        
        mysql_query($sql, $conexao) or die(mysql_error());
    }
    ?>
</html>
