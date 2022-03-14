<?php
include_once("header.php");
include_once("../model/conexao.php");                                
include_once("../model/usuariomodel.php");

extract($_REQUEST,EXTR_OVERWRITE);

$info = visuUsuarioCodigo($conn,$codigousu);
$informa = mysqli_fetch_array($info);
?>

<div class="container" >
<form class="row g-3" action="../controler/alterarUsuario.php" method="post">
    <input type="text" name="codigousu" value="<?=$informa["idusu"]?>" >
  <div class="col-md-6">
    <label for="inputnome" class="form-label">Nome</label>
    <input type="text" name="nomeusu" value="<?=$informa["nomeusu"]?>" class="form-control" id="inputnome" required>
  </div>
  <div class="col-md-6">
    <label for="inputemail" class="form-label">Email</label>
    <input type="email" name="emailusu" value="<?=$informa["emailusu"]?>"class="form-control" id="inputemail" required>
  </div>
  <div class="col-6">
    <label for="inputfone" class="form-label">Fone</label>
    <input type="text" name="foneusu" value="<?=$informa["foneusu"]?>" class="form-control" id="inputfone" placeholder="(00) 00000-0000" required>
  </div>
  <div class="col-4">
    <label for="inputcpf" class="form-label">CPF</label>
    <input type="text" name="cpfusu" value="<?=$informa["cpfusu"]?>" class="form-control" id="inputcpf" placeholder="000.000.000-00" required>
  </div>
  <div class="col-md-2">
    <label for="inputcep" class="form-label">CEP</label>
    <input type="text" name="cepusu" value="<?=$informa["cepusu"]?>" class="form-control" id="inputcep" placeholder="00000-000" required>
  </div>
  <div class="col-md-2">
    <label for="inputnumero" class="form-label">Número</label>
    <input type="text" name="numusu" value="<?=$informa["numusu"]?>" class="form-control" id="inputnumero" required>
  </div>
  <div class="col-md-6">
    <label for="inputcomplemento" class="form-label">Complemento</label>
    <input type="text" name="compleusu" value="<?=$informa["compleusu"]?>" class="form-control" id="inputcomplemento" placeholder="Apartamento, Rua A, Casa 2" required>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Tipo de Usúario</label>
    <select id=inputtipo name="tipousu"class="form-select" required > 
    <option selected value="<?=$informa["tipousu"]?>">

<?php
if($informa["tipousu"] == "1")
echo("Funcionário");
    else
echo("Cliente");
?>

<?php

if($informa["tipousu"] == "2")
echo("<option value=1>Funcionário</option>");
    else
echo("<option value=2>Cliente</option>");

?>

     <option value="1">Fúncionario</option>
     <option value="2">Cliente</option>
    </select>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Alterar</button>
  </div>
</div>
</form>

<?php
include_once("footer.php");
?>