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
      <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="generoJogo" placeholder="genero">
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
$generojogo = isset($_POST["generoJogo"])? $_POST["generoJogo"] : "";
if($generojogo){
$dado = visugeneroJogos($conn,$generojogo);

foreach($dado as $generoJogos):
?>
    <tr>
      <th scope="row"><?=$generoJogos["idjogo"]?></th>
      <td><?=$generoJogos["nomejogo"]?></td>
      <td><?=$generoJogos["valorjogo"]?></td>
      <td><?=$generoJogos["generojogo"]?></td>
      <td><?=$generoJogos["datalancamentojogo"]?></td>
      <td><?=$generoJogos["studiojogo"]?></td>
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
