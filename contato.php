<?php
include("conexao.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contato</title>
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
            <div id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November19, 2012!</div>
                <div class="container">
                    <div class="row">
                        <article class="span8">
                            <br>
                            <legend>Sua opinião é importante</legend>
                            <div class="inner-1">
                                <form id="contact-form" method="post" onsubmit="alert('Sua mensagem foi enviada!')">
                                    <div class="success"> Sua mensagem foi enviada com sucesso! <strong>Entraremos em contato em breve!</strong> </div>
                                    <fieldset>
                                        <div>
                                            <label class="name">
                                                <input type="text" value="Seu nome">
                                                <br>
                                                <span class="error">*Nome inválido.</span> <span class="empty">*Campo obrigatório.</span> </label>
                                        </div>
                                        <div>
                                            <label class="phone">
                                                <input type="tel" value="Telefone">
                                                <br>
                                                <span class="error">*Número inválio.</span> <span class="empty">*Campo obrigatório.</span> </label>
                                        </div>
                                        <div>
                                            <label class="email">
                                                <input type="email" value="Email">
                                                <br>
                                                <span class="error">*Email inválido.</span> <span class="empty">*Campo obrigatório.</span> </label>
                                        </div>
                                        <div>
                                            <label class="message">
                                                <textarea>Mensagem</textarea>
                                                <br>
                                                <span class="error">*Mensagem curta.</span> <span class="empty">*Campo obrigatório.</span> </label>
                                        </div>
                                        <div class="buttons-wrapper"> <a class="btn btn-warning" data-type="reset">Limpar</a> <a class="btn btn-success" data-type="submit">Enviar</a></div>
                                    <br><br><br>
                                    </fieldset>
                                </form>
                            </div>
                        </article>
                        <article class="span4">
                            <br>
                            <legend>Localização</legend>
                            <div class="map">
                                <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"> </iframe>
                            </div>
                            <address class="address-1">
                                <strong>São João Del-Rei<br>
                                </strong>
                                <div class="overflow">                
                                    <label>Celular: (32) 9801-9627</label>
                                    <label>E-mail: juliocto2011@gmail.com</label>
                                    <label>Skype: juliocto</label>
                                </div>
                            </address>
                        </article>
                    </div>
                </div>
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
               
            </div>
        </footer>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>