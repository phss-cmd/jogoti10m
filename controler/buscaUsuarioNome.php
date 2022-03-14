<?php 
include_once("../model/conexao.php");
include_once("../model/usuariomodel.php");

$nome = $_POST["nomeUsu"];

if(visuUsuarioNome($conn,$nomeusu)){
    header("location:../view/visuUsuNome.php");
}else{
    header("location:../view/visuUsuNome.php");
}
?>