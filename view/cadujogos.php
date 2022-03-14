<?php
include_once("header.php");
?>

<div class=container >
<form class="row g-3" action="../controler/inserirJogo.php" method="Get">
  <div class="col-md-6">
    <label for="inputnome" class="form-label">Nome</label>
    <input type="text" name="nomejogo" class="form-control" id="inputnome" required>
  </div>
  <div class="col-md-3">
    <label for="inputvalor" class="form-label">Valor</label>
    <input type="number" name="valorjogo"class="form-control" id="inputvalor" em required>
  </div>

  <div class="col-md-3">
    <label for="inputquantidade" class="form-label">Quantidade</label>
    <input type="number" name="qtdjogo"class="form-control" id="inputqauntidade" em required>
  </div>

  <div class="col-md-3">
    <label for="inputdatalancamento" class="form-label">Data de Lançamento</label>
    <input type="date" name="datalancamentojogo"class="form-control" id="inputlancamento" em required>
  </div>

  <div class="col-md-3">
    <label for="inputstudio" class="form-label">Studio</label>
    <input type="text" name="studiojogo"class="form-control" id="inputstudio" em required>
  </div>

  
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Gênero</label>
    <select id=generojogo name="generojogo"class="form-select" required > 
    <option selected >escolha...</option>
     <option value="1">Ação e Aventura</option>
     <option value="2">Estratégia</option>
     <option value="3">RPG</option>
     <option value="4">Simulação</option>
     <option value="5">Puzzle e Party Games</option>
    </select>

  
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck">
        Aceito os termos de uso
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</div>
</form>

<?php
include_once("footer.php");
?>