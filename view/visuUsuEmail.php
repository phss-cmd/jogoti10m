<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/usuariomodel.php");
?>

<div class="centroform">
  <form action="#" method="Post" class="row row-cols-lg-auto g-3 align-items-center">
    <div class="col-12">
      <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
      <div class="input-group">
        <div class="input-group-text">E-mail</div>
        <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="emailusu" placeholder="E-mail do Usuário">
      </div>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Pesquisar</button>
    </div>
  </form>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">Telefone</th>
        <th scope="col">Alterar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $emailusu = isset($_POST["emailusu"]) ? $_POST["emailusu"] : "";

      if ($emailusu) {
        $dado = visuUsuarioEmail($conn, $emailusu);

        foreach ($dado as $emailusu) :
      ?>
          <tr>
            <th scope="row"><?= $emailusu["idusu"] ?></th>
            <td><?= $emailusu["nomeusu"] ?></td>
            <td><?= $emailusu["foneusu"] ?></td>
            <td><?= $emailusu["emailusu"] ?></td>
            <td>
              <form action="../view/alterarform.php" method="POST">
                <input type="hidden" value="<?= $emailusu["idusu"] ?>" name="codigousu">
                <button type="submit" class="btn btn-primary">Alterar</button>
              </form>
            </td>
            <td>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-danger" codigo="<?= $emailusu["idusu"] ?>" email="<?= $emailusu["emailusu"] ?>"  data-bs-toggle="modal" data-bs-target="#deleteModal">
                Excluir
              </button>
            </td>

          </tr>

      <?php
        endforeach;
      }
      ?>
    </tbody>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabe1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModal">Exclusão de Usuário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <form action="../controler/deletarUsuario.php" method="GET">
          <input type="hidden" class="codigo form-conrol" name="codigousu">
          <button type="submit" class="btn btn-danger">Sim</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>

      </div>
    </div>
  </div>
</div>


<script>
  var deletarUsuario = document.getElementById('deleteModal');
  deletarUsuario.addEventListener('show.bs.modal', function(event){
    var button = event.relatedTarget;
    var codigo = button.getAttribute('codigo');
    var email = button.getAttribute('email');
  

    var modalbody = deletarUsuario.querySelector('.modal-body');
    modalbody.textContent = 'Gostaria de excluir o E-mail' + email + '?';

    var Codigo = deletarUsuario.querySelector('.modal-footer .codigo');

    Codigo.value = codigo;

  })
</script>




<?php
include_once("footer.php");
?>