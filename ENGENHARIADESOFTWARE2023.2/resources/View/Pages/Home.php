<?php
// require_once '..\..\..\app\Controller\Pages\Servicos.php';

use \App\Controller\Pages\Servico;

$Servico = new Servico;
$resultado = null;

if (isset($_POST['pesquisa'])) {
  $pesquisa = $_POST['pesquisa'];
  $resultado = $Servico->PesquisarServicos($pesquisa);
}




?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<section id="sectionformal" class="clearfix">
  <div class="container">
    <div class="hero-info">
      <div class="container mt-5">
        <br>
        <!-- Modal de Sucesso -->
<div class="modal fade" id="modalSucesso" tabindex="-1" role="dialog" aria-labelledby="modalSucessoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSucessoLabel">Sucesso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Sua solicitação foi enviada com sucesso.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal de Erro -->
<div class="modal fade" id="modalErro" tabindex="-1" role="dialog" aria-labelledby="modalErroLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalErroLabel">Erro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Ocorreu um erro ao enviar sua solicitação. Por favor, tente novamente mais tarde.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

        <?php
        if (isset($_POST['confirmarAlteracao'])) {
          $descricaoSolicitacao = $_POST['descricaoSolicitacao'];
          $id_servico = $_POST['id'];
          $id_solicitante = $decoded->id;

          $resultado2 = $Servico->SolicitarServiço($descricaoSolicitacao, $id_solicitante, $id_servico);

          if ($resultado2) {
            // Se for bem-sucedido, exiba o modal de sucesso
            echo '<script>$("#modalSucesso").modal("show");</script>';
          } else {
            // Se falhar, exiba o modal de erro
            echo '<script>$("#modalErro").modal("show");</script>';
          }
        }
        ?>
        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="text" value="<?= $_POST["pesquisa"] ?? "" ?>" id="pesquisa" name="pesquisa" class="form-control" placeholder="Pesquisar..." aria-label="Pesquisar" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="submit">Pesquisar</button>
            </div>
          </div>
        </form>

        <?php

        $Servico = new Servico;
        $result = $Servico->ConsultarServicos();

        if (isset($_POST['pesquisa']) && !empty($_POST['pesquisa'])) {
          if ($resultado !== null && $resultado->num_rows > 0) {
            echo '<div class="row">';

            while ($row = $resultado->fetch_assoc()) {
              echo '<div class="col-md-4">';
              echo '<div class="card mb-4 box-shadow">';
              $imagem_path = '..\\Assets\\serviço.jpg';

              echo '<img class="card-img-top" src="' . $imagem_path . '" alt="Imagem Padrão">';
              echo '<div class="card-body">';
              echo '<h5>' . $row["Nome"] . '</h5>';
              echo '<p class="card-text">' . $row["Descricao"] . '</p>';
              echo '<div class="d-flex justify-content-between align-items-center">';
              echo '<div class="btn-group">';
              echo "<button type='button' class='btn btn-sm btn-outline-secondary' data-toggle='modal' data-target='#modalDetalhes" . $row['Id'] . "'>Visualizar</button>";
              echo "<button type='button' class='btn btn-sm btn-outline-secondary' data-toggle='modal' data-target='#modalSolicitar" . $row['Id'] . "'>Solicitar serviço</button>";
              echo '</div>';
              echo '<div class="d-flex justify-content-between align-items-center">';
              echo '<span class="text-success font-weight-bold" style="margin-left: 5px;">R$ ' . number_format($row['Valor'], 2, ',', '.') . '</span>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';

              // Modal Detalhes
              echo "<div class='modal fade' id='modalDetalhes" . $row['Id'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
              echo "<div class='modal-dialog' role='document'>";
              echo "<div class='modal-content'>";
              echo "<div class='modal-header'>";
              echo "<h5 class='modal-title' id='exampleModalLabel'>Detalhes do Serviço</h5>";
              echo "<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>";
              echo "<span aria-hidden='true'>&times;</span>";
              echo "</button>";
              echo "</div>";
              echo "<div class='modal-body'>";

              $nomePrestador = Servico::ObterNomePrestador($row['prestador_id']);
              echo "<p>Aqui está todos os dados do serviço desde a sua última alteração:</p>";
              echo "<p>ID do serviço: " . $row['Id'] . "</p>";
              echo "<p>Prestador: " . $nomePrestador . "</p>";
              echo "<p>ID do prestador: " . $row['prestador_id'] . "</p>";
              echo "<p>Serviço: " . $row['Nome'] . "</p>";
              echo "<p>Preço: R$" . $row['Valor'] . "</p>";
              echo "<p>Descrição: " . $row['Descricao'] . "</p>";
              if ($row['disponibilidade'] == 1) {
                echo '<strong><span class="text-success">Disponível</span></strong>';
              } else {
                echo '<strong><span class="text-danger">Indisponível</span></strong>';
              }

              echo "</div>";
              echo "<div class='modal-footer'>";
              echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              // FIM MODAL DETALHES


              // Modal de Solicitação
              echo "<div class='modal fade' id='modalSolicitar" . $row['Id'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
              echo "<div class='modal-dialog' role='document'>";
              echo "<div class='modal-content'>";
              echo "<div class='modal-header'>";
              echo "<h5 class='modal-title' id='exampleModalLabel'>Solicitar Serviço</h5>";
              echo "<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>";
              echo "<span aria-hidden='true'>&times;</span>";
              echo "</button>";
              echo "</div>";
              echo "<div class='modal-body'>";
              echo "<form action='' method='post'>";
              echo "<div class='form-group'>";
              echo "<textarea id='descricaoSolicitacao" . $row['Id'] . "' name='descricaoSolicitacao' class='form-control' placeholder='Descreva sua solicitação'></textarea>";
              echo "</div>";
              echo "<input type='hidden' name='id' value='" . $row['Id'] . "'>";
              echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>";
              echo "<button type='submit' class='ml-3 btn btn-success' name='confirmarAlteracao'>Confirmar Solicitação</button>";
              echo "</form>";
              echo "</div>";
              echo "<div class='modal-footer'>";

              echo "</div>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              // FIM Modal de Solicitação

            }

            echo '</div>';
          } else {
            echo "Nenhum serviço encontrado na base de dados.";
          }
        } else {
          if ($result->num_rows > 0) {
            echo '<div class="row">';

            while ($row = $result->fetch_assoc()) {
              echo '<div class="col-md-4">';
              echo '<div class="card mb-4 box-shadow">';
              $imagem_path = '..\\Assets\\serviço.jpg';

              echo '<img class="card-img-top" src="' . $imagem_path . '" alt="Imagem Padrão">';
              echo '<div class="card-body">';
              echo '<h5>' . $row["Nome"] . '</h5>';
              echo '<p class="card-text">' . $row["Descricao"] . '</p>';
              echo '<div class="d-flex justify-content-between align-items-center">';
              echo '<div class="btn-group">';
              echo "<button type='button' class='btn btn-sm btn-outline-secondary' data-toggle='modal' data-target='#modalDetalhes" . $row['Id'] . "'>Visualizar</button>";
              echo "<button type='button' class='btn btn-sm btn-outline-secondary' data-toggle='modal' data-target='#modalSolicitar" . $row['Id'] . "'>Solicitar serviço</button>";
              echo '</div>';
              echo '<div class="d-flex justify-content-between align-items-center">';
              echo '<span class="text-success font-weight-bold" style="margin-left: 5px;">R$ ' . number_format($row['Valor'], 2, ',', '.') . '</span>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';

              // Modal Detalhes
              echo "<div class='modal fade' id='modalDetalhes" . $row['Id'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
              echo "<div class='modal-dialog' role='document'>";
              echo "<div class='modal-content'>";
              echo "<div class='modal-header'>";
              echo "<h5 class='modal-title' id='exampleModalLabel'>Detalhes do Serviço</h5>";
              echo "<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>";
              echo "<span aria-hidden='true'>&times;</span>";
              echo "</button>";
              echo "</div>";
              echo "<div class='modal-body'>";

              $nomePrestador = Servico::ObterNomePrestador($row['prestador_id']);
              echo "<p>Aqui está todos os dados do serviço desde a sua última alteração:</p>";
              echo "<p>ID do serviço: " . $row['Id'] . "</p>";
              echo "<p>Prestador: " . $nomePrestador . "</p>";
              echo "<p>ID do prestador: " . $row['prestador_id'] . "</p>";
              echo "<p>Serviço: " . $row['Nome'] . "</p>";
              echo "<p>Preço: R$" . $row['Valor'] . "</p>";
              echo "<p>Descrição: " . $row['Descricao'] . "</p>";
              if ($row['disponibilidade'] == 1) {
                echo '<strong><span class="text-success">Disponível</span></strong>';
              } else {
                echo '<strong><span class="text-danger">Indisponível</span></strong>';
              }

              echo "</div>";
              echo "<div class='modal-footer'>";
              echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              // FIM MODAL DETALHES


              // Modal de Solicitação
              echo "<div class='modal fade' id='modalSolicitar" . $row['Id'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
              echo "<div class='modal-dialog' role='document'>";
              echo "<div class='modal-content'>";
              echo "<div class='modal-header'>";
              echo "<h5 class='modal-title' id='exampleModalLabel'>Solicitar Serviço</h5>";
              echo "<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>";
              echo "<span aria-hidden='true'>&times;</span>";
              echo "</button>";
              echo "</div>";
              echo "<div class='modal-body'>";
              echo "<form action='' method='post'>";
              echo "<div class='form-group'>";
              echo "<textarea id='descricaoSolicitacao" . $row['Id'] . "' name='descricaoSolicitacao' class='form-control' placeholder='Descreva sua solicitação'></textarea>";
              echo "</div>";
              echo "<input type='hidden' name='id' value='" . $row['Id'] . "'>";
              echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>";
              echo "<button type='submit' class='ml-3 btn btn-success' name='confirmarAlteracao'>Confirmar Solicitação</button>";
              echo "</form>";
              echo "</div>";
              echo "<div class='modal-footer'>";

              echo "</div>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              // FIM Modal de Solicitação
            }

            echo '</div>';
          } else {
            echo "Nenhum serviço encontrado na base de dados.";
          }
        }
        ?>

      </div>
    </div>
  </div>
</section>