<?php
include_once("../model/conexao.php");
include_once("../model/jogomodel.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(alterarJogo($conn,$codigojogo,$nomejogo,$valorjogo,$generojogo,
$qtdjogo,$datalancamentojogo,$studiojogo)){
echo("Dados Alterados com sucesso");
}else{
echo("Dados não Alterados");
}

include_once("../view/footer.php");
?>