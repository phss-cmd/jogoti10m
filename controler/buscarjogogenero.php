<?php 
include_once("../model/conexao.php");
include_once("../model/jogomodel.php");

$generojogos = $_POST ["generojogo"];

if(visugeneroJogos($conn,$generojogo)){
    header("location:../view/visujogogenero.php");
}else{
    header("location:../view/visujogogenero.php");
}
?>