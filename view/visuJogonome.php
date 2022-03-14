<?php  
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogomodel.php");
?>

<div class="centroform">
<form action="#" method="Post" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
    <div class="input-group">
      <div class="input-group-text">Nome</div>
      <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="nomeJogo" placeholder="Nome">
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Gênero</th>
      <th scope="col">Studio</th>
    </tr>
  </thead>
  <tbody>
  <?php
$nomejogo = isset($_POST["nomeJogo"])? $_POST["nomeJogo"] : "";
if($nomejogo){
$dado = visunomeJogos($conn,$nomejogo);

foreach($dado as $nomeJogos):
?>
    <tr>
      <th scope="row"><?=$nomeJogos["idjogo"]?></th>
      <td><?=$nomeJogos["nomejogo"]?></td>
      <td><?=$nomeJogos["valorjogo"]?></td>
      <td><?=$nomeJogos["generojogo"]?></td>
      <td><?=$nomeJogos["datalancamentojogo"]?></td>
      <td><?=$nomeJogos["studiojogo"]?></td>
    </tr>
<?php  
endforeach;
}
?>
  </tbody>
</table>
</div>
<?php
include_once("footer.php");
?>
