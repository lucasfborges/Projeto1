<?php

include("conexao.php");
session_start();

$descricao = $_REQUEST['descricaoFase'];


$sql = "INSERT INTO fases (descricaoFase) VALUES ('".$descricao."')";
        

$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Login não disponível.'));
}
?>