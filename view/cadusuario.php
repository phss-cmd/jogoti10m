<?php
include_once("header.php");
?>

<div class=container >
<form class="row g-3" action="../controler/inserirCadastro.php" method="Get">
  <div class="col-md-6">
    <label for="inputnome" class="form-label">Nome</label>
    <input type="text" name="nomeusu" class="form-control" id="inputnome" required>
  </div>
  <div class="col-md-6">
    <label for="inputemail" class="form-label">Email</label>
    <input type="email" name="emailusu"class="form-control" id="inputemail" required>
  </div>
  <div class="col-6">
    <label for="inputfone" class="form-label">Fone</label>
    <input type="text" name="foneusu" class="form-control" id="inputfone" placeholder="(00) 00000-0000" required>
  </div>
  <div class="col-4">
    <label for="inputcpf" class="form-label">CPF</label>
    <input type="text" name="cpfusu" class="form-control" id="inputcpf" placeholder="000.000.000-00" required>
  </div>
  <div class="col-md-2">
    <label for="inputcep" class="form-label">CEP</label>
    <input type="text" name="cepusu" class="form-control" id="inputcep" placeholder="00000-000" required>
  </div>
  <div class="col-md-2">
    <label for="inputnumero" class="form-label">Número</label>
    <input type="text" name="numusu" class="form-control" id="inputnumero" required>
  </div>
  <div class="col-md-6">
    <label for="inputcomplemento" class="form-label">Complemento</label>
    <input type="text" name="compleusu"class="form-control" id="inputcomplemento" placeholder="Apartamento, Rua A, Casa 2" required>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Tipo de Usúario</label>
    <select id=inputtipo name="tipousu"class="form-select" required > 
    <option selected >escolha...</option>
     <option value="1">Fúncionario</option>
     <option value="2">Cliente</option>
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
