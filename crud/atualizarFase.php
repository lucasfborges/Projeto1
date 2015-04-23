<?php

include("conexao.php");
session_start();

$descricaoFase = $_REQUEST['descricaoFase'];
$d1 = $_GET['d1'];


$sql = "UPDATE fases SET descricaoFase='$descricaoFase' where descricaoFase='$d1'";



$result = @mysql_query($sql);
if ($result) {
    echo json_encode(array('success' => true));
} else {
    echo json_encode(array('msg' => 'Erro ao atualizar dados.'));
}
//}
?>