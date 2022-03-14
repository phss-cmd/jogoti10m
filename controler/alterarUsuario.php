<?php
include_once("../model/conexao.php");
include_once("../model/usuariomodel.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(alterarUsuario($conn,$codigousu,$nomeusu,$emailusu,$foneusu,
$cpfusu,$cepusu,$numusu,$compleusu,$tipousu)){
echo("Dados Alterados com sucesso");
}else{
echo("Dados não Alterados");
}

include_once("../view/footer.php");
?>