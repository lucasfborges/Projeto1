<?php
include("conexao.php");
?>

<?php
session_start();

if(($_SESSION["tipoUsuario"]) == 1){
    header("Location: projeto.php");    
  
} 

elseif(($_SESSION["tipoUsuario"]) == 2){
    header("Location: administrador.php");    
  
}

elseif(($_SESSION["tipoUsuario"]) == 3){
    header("Location: medico.php");    
  
}

elseif(($_SESSION["tipoUsuario"]) == 4){
    header("Location: enfermeiro.php");    
  
}


elseif(($_SESSION["tipoUsuario"]) == 5){
    header("Location: presidente.php");    
  
}

else {
    header("Location: login.php");
}
?>
