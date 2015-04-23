<?php

include("conexao.php");
session_start();


$descricao = $_REQUEST['descricaoFase'];


$sql = "delete from fases where descricaoFase='$descricao'";

$result = @mysql_query($sql);
if ($result) {
    echo json_encode(array('success' => true));
} else {
    echo json_encode(array('msg' => 'Erro ao remover dados.'));
}
?>