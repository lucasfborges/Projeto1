<?php
include("conexao.php");
if (isset($_SESSION["tipoUsuario"])) {
    if ($_SESSION["tipoUsuario"] == 1) {
        $url = 'index.php';
        $nomeElemento = 'Home';
    } elseif ($_SESSION["tipoUsuario"] == 2) {
        $url = 'administrador.php';
        $nomeElemento = 'ADM';
    } elseif ($_SESSION["tipoUsuario"] == 3) {
        $url = 'medico.php';
        $nomeElemento = 'Médico';
    } elseif ($_SESSION["tipoUsuario"] == 4) {
        $url = 'enfermeiro.php';
        $nomeElemento = 'Enfermeiro';
    } elseif ($_SESSION["tipoUsuario"] == 5) {
        $url = 'presidente.php';
        $nomeElemento = 'Presidente';
    }
}
?>




<div class="container clearfix">
    <div class="row">
        <div class="span12">
            <div class="navbar navbar_">
                <div class="container">
                    <h1 class="brand brand_" ><a href="index.php"><img alt="" src="img/logo.gif"> </a></h1>
                    <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
                    <div class="nav-collapse nav-collapse_  collapse">
                        <ul class="nav sf-menu">


                            <li id="actHome"><a id="elementoMutavel" href="index.php">Home</a></li>

                            <script type="text/javascript">
                                document.getElementById("elementoMutavel").innerHTML = "<?php echo $nomeElemento; ?>";
                                document.getElementById("elementoMutavel").href = "<?php echo $url; ?>";
                            </script>

                            <li  id="actLogin" class="sub-menu"><a href="login.php">Login</a>
                                <ul>
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                            <li id="actCadastro"><a href="cadastroCliente.php">Cadastro</a></li>
                            <li id="actContato"><a href="contato.php">Contato</a></li>
                            <script type="text/javascript">
                                if ((document.URL.indexOf('index.php') != -1) || (document.URL.indexOf('administrador.php') != -1) ||
                                        (document.URL.indexOf('cliente.php') != -1) || (document.URL.indexOf('enfermeiro.php') != -1) ||
                                        (document.URL.indexOf('medico.php') != -1) || (document.URL.indexOf('presidente.php') != -1)
                                        || (document.URL.indexOf('uti.php') != -1)|| (document.URL.indexOf('cirurgia.php') != -1)
                                        || (document.URL.indexOf('consultorio.php') != -1) || (document.URL.indexOf('medicocrud.php') != -1)
                                        || (document.URL.indexOf('enfermeirocrud.php') != -1)) {
                                    document.getElementById("actHome").className = "active";

                                } else if (document.URL.indexOf('login.php') != -1) {
                                    document.getElementById("actLogin").className = "active";
                                }
                                else if (document.URL.indexOf('cadastroCliente.php') != -1) {
                                    document.getElementById("actCadastro").className = "active";
                                }
                                else if (document.URL.indexOf('contato.php') != -1) {
                                    document.getElementById("actContato").className = "active";
                                }
                            </script>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

