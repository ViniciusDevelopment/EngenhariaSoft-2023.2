<?php
require_once '..\..\..\app\Controller\Pages\Servicos.php';

use \App\Controller\Pages\Servico;

$Servico = new Servico;
$resultado = null;

if (isset($_POST['pesquisa'])) {
  $pesquisa = $_POST['pesquisa'];
  $resultado = $Servico->PesquisarSolicitacoes($pesquisa);
}
?>

<section id="sectionformal" class="clearfix">
  <div class="container">

    <div class="hero-info">
      <div class="container mt-5">
        <br>
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
        $result = $Servico->ConsultarSolicitacoes();

        if (isset($_POST['pesquisa']) && !empty($_POST['pesquisa'])) {
          if ($resultado->num_rows > 0) {
             // Iniciar a saída HTML
             echo '<div class="row">';

             // Loop através dos resultados
             while ($row = $resultado->fetch_assoc()) {
               echo '<div class="col-md-4">';
               echo '<div class="card mb-4 box-shadow">';

               // $imagem_url = $row["imagem_url"];
               $imagem_path = '..\\Assets\\serviço.jpg'; // Caminho padrão da imagem

               // if (file_exists($imagem_url)) {
               //   echo '<img class="card-img-top" src="' . $imagem_url . '" alt="Imagem do Serviço">';
               // } else {
               echo '<img class="card-img-top" src="' . $imagem_path . '" alt="Imagem Padrão">';
               // }
               echo '<div class="card-body">';
               echo '<h5>' . $row["Nome"] . '</h5>';
               echo '<p class="card-text">' . $row["Descricao"] . '</p>';
               echo '<div class="d-flex justify-content-between align-items-center">';
               echo '<div class="btn-group">';
               echo '<button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>';
               echo '<button type="button" class="btn btn-sm btn-outline-secondary">Solicitar serviço</button>';
               echo '</div>';
               // Exibir a disponibilidade e o valor no canto direito como "R$"
               echo '<div class="d-flex justify-content-between align-items-center">';
               // echo '<small class="text-muted" style="margin-right: 5px;">' . $row["disponibilidade"] . '</small>';
               echo '<span class="text-success font-weight-bold" style="margin-left: 5px;">R$ ' . number_format($row['Valor'], 2, ',', '.') . '</span>';
               echo '</div>';
               echo '</div>';
               echo '</div>';
               echo '</div>';
               echo '</div>';
             }

             // Fechar a saída HTML
             echo '</div>';
           } else {
             echo "Nenhum serviço encontrado na base de dados.";
           }

          }

        else {
          if ($result->num_rows > 0) {

            // Iniciar a saída HTML
            echo '<div class="row">';

            // Loop através dos resultados
            while ($row = $result->fetch_assoc()) {
              echo '<div class="col-md-4">';
              echo '<div class="card mb-4 box-shadow">';

              // $imagem_url = $row["imagem_url"];
              $imagem_path = '..\\Assets\\serviço.jpg'; // Caminho padrão da imagem

              // if (file_exists($imagem_url)) {
              //   echo '<img class="card-img-top" src="' . $imagem_url . '" alt="Imagem do Serviço">';
              // } else {
              echo '<img class="card-img-top" src="' . $imagem_path . '" alt="Imagem Padrão">';
              // }
              echo '<div class="card-body">';
              echo '<h5>' . $row["Nome"] . '</h5>';
              echo '<p class="card-text">' . $row["Descricao"] . '</p>';
              echo '<div class="d-flex justify-content-between align-items-center">';
              echo '<div class="btn-group">';
              echo '<button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>';
              echo '<button type="button" class="btn btn-sm btn-outline-secondary">Solicitar serviço</button>';
              echo '</div>';
              // Exibir a disponibilidade e o valor no canto direito como "R$"
              echo '<div class="d-flex justify-content-between align-items-center">';
              // echo '<small class="text-muted" style="margin-right: 5px;">' . $row["disponibilidade"] . '</small>';
              echo '<span class="text-success font-weight-bold" style="margin-left: 5px;">R$ ' . number_format($row['Valor'], 2, ',', '.') . '</span>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
            }

            // Fechar a saída HTML
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
