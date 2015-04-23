<?php
include("conexao.php");
?>

<html>
    <head>
        <title>Autenticação</title>
        <script type="text/javascript">
            function loginsucessfully() {
                setTimeout("window.location='controle.php'", 1000);
            }
            function loginfailed() {
                setTimeout("window.location='controle.php'", 1000);
            }
        </script>
    </head>
    <body>
        <div id="all">
            <?php
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $tipoUsuario = 1;
            $teste = false;

            $sql = "SELECT * FROM pessoa WHERE login = '$login' and password = '$senha' and TIPO_USUARIO = 1";

            $reg = mysql_query($sql, $conexao) or die(mysql_error());

            $resultado = mysql_fetch_object($reg);
            $sql2 = mysql_query("SELECT * FROM pessoa WHERE login = '$login' and password = '$senha' and TIPO_USUARIO = 2");
            

            
            $row = mysql_num_rows($reg);
            if ($row > 0) {
                $teste = true;
                session_start();
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['senha'] = $_POST['senha'];
                $_SESSION['tipoUsuario'] = 1;
                $_SESSION['cpflogin'] = "$resultado->cpf";
                echo "<center>Login do aluno efetuado!</center>";
                echo "<script> loginsucessfully()</script>";
            }
            
            $row = mysql_num_rows($sql2);
            if ($row > 0) {
                $teste = true;
                session_start();
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['senha'] = $_POST['senha'];
                $_SESSION['tipoUsuario'] = 2;
                echo "<center>Login do administrador efetuado!</center>";
                echo "<script> loginsucessfully()</script>";
            }
            
          
            
            if ($teste == false){               
                echo "<center>Falha no login!</center>";
                echo "<script> loginfailed()</script>";              
            }
            
             
            ?>
        </div>
    </body>
</html>