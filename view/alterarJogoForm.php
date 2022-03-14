<?php
include_once("header.php");
include_once("../model/conexao.php");                                
include_once("../model/jogomodel.php");

extract($_REQUEST,EXTR_OVERWRITE);

$info = visucodigoJogos($conn,$codigojogo);
$informa = mysqli_fetch_array($info);
?>

<div class=container >
<form class="row g-3" action="../controler/alterarjogo.php" method="Get">
  <div class="col-md-6">
    <label for="inputnome" class="form-label">Nome</label>
    <input type="text" name="nomejogo" value="<?=$informa["nomejogo"]?>" class="form-control" id="inputnome" required>
  </div>
  <div class="col-md-3">
    <label for="inputvalor" class="form-label">Valor</label>
    <input type="number" name="valorjogo" value="<?=$informa["valorjogo"]?>" class="form-control" id="inputvalor" em required>
  </div>

  <div class="col-md-3">
    <label for="inputquantidade" class="form-label">Quantidade</label>
    <input type="number" name="qtdjogo" value="<?=$informa["qtdjogo"]?>" class="form-control" id="inputqauntidade" em required>
  </div>

  <div class="col-md-3">
    <label for="inputdatalancamento" class="form-label">Data de Lançamento</label>
    <input type="date" name="datalancamentojogo" value="<?=$informa["datalancamentojogo"]?>" class="form-control" id="inputlancamento" em required>
  </div>

  <div class="col-md-3">
    <label for="inputstudio" class="form-label">Studio</label>
    <input type="text" name="studiojogo" value="<?=$informa["studiojogo"]?>" class="form-control" id="inputstudio" em required>
  </div>

  
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Gênero</label>
    <select id=generojogo name="generojogo" value="<?=$informa["generojogo"]?>" class="form-select" required > 
    <option selected >escolha...</option>
     <option value="1">Ação e Aventura</option>
     <option value="2">Estratégia</option>
     <option value="3">RPG</option>
     <option value="4">Simulação</option>
     <option value="5">Puzzle e Party Games</option>
    </select>


  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</div>
</form>

<?php
include_once("footer.php");
?>