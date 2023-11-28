<?php
require_once '..\..\..\app\Controller\Pages\Avaliacao.php';

use \App\Controller\Pages\Avalia;

$Avalia = new Avalia;

if (isset($_POST['tituloAvalia'])) {
    $titulo = $_POST['tituloAvalia'];
    $nota = $_POST['notaAvalia'];
    $descricao = $_POST['descricaoAvalia'];
    $id_avaliado = $_POST['id_avaliado'];
    $id_autor = $decoded->id;

    $retornoCadastroAvaliacao = $Avalia->FazerAvaliacao($titulo, $nota, $descricao, $id_autor, $id_avaliado);

    echo '<div class="d-flex justify-content-center mt-3">';

    if ($retornoCadastroAvaliacao) {
        // Redireciona para a mesma página com um parâmetro "success"
        header('Location: Layout.php?arquivo=Avaliar&id=&success=true');
    } else {
        // Mensagem de erro (vermelho)
        echo '<div class="alert alert-danger mt-3 w-50">
                <strong>Erro:</strong> Erro ao fazer a avaliação.
              </div>';
    }

    echo '</div>';
}

if (isset($_POST['confirmarExclusao'])) {
    $idServico = $_POST['id_servico'];
    $retornoExclusaoServico = $Avalia->ExcluirServico($idServico);

    // Verifique o retorno da função e exiba uma mensagem correspondente
    if ($retornoExclusaoServico === 1) {
        echo '<div class="alert alert-success" role="alert">Avaliação excluída com sucesso!</div>';
    } elseif ($retornoExclusaoServico === -1) {
        echo '<div class="alert alert-danger" role="alert">A avaliação não foi encontrada.</div>';
    } elseif ($retornoExclusaoServico === 0) {
        echo '<div class="alert alert-danger" role="alert">Erro ao excluir avaliação.</div>';
    }
}

?>
<section id="sectionformal" class="clearfix">
    <div class="container">

        <div class="hero-info">
<div class="container mt-5">
    <h1>Avaliar Prestador:</h1>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="tituloAvalia" class="form-label">Título</label>
            <input type="text" class="form-control" id="tituloAvalia" name="tituloAvalia" required>
        </div>
        <div class="mb-3">
            <label for="notaAvalia" class="form-label">Nota:</label>
            <input type="number" class="form-control" id="notaAvalia" name="notaAvalia" required>
        </div>
        <div class="mb-3">
           <label for="id_Avalia" class="form-label">ID do Prestador:</label>
           <input type="number" class="form-control" id="id_Avalia" name="id_avaliado" required>
        </div>
        <div class="mb-3">
            <label for="descricaoAvalia" class="form-label">Descrição:</label>
            <textarea class="form-control" id="descricaoAvalia" name="descricaoAvalia" rows="4"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Finalizar</button>
    </form>
</div>

<div class="container p-3">
    <div class="card p-3 table-responsive">
        <h2>Minhas críticas:</h2>
        <table class="table table-bordered table-hover">
            <thead>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                <tr>
                    <th>ID</th>
                    <th>Prestador</th>
                    <th>Título</th>
                    <th>Nota</th>
                    <th>+</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $Avalia->ConsultarAvaliacoes($decoded->id, $decoded->id);


                if ($result->num_rows > 0) {
                    // Exibe os dados na tabela
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['Id'] . "</td>";
                        $nomePrestador = Avalia::ObterNomePrestador($row['avaliado_id']);
                        echo "<td>" . $nomePrestador . "</td>";
                        echo "<td>" . $row['Titulo'] . "</td>";
                        echo "<td>" . $row['Nota'] . "/10" . "</td>";
                        
                        echo "<td class='col-auto'>";
                        // Botão para acionar modal DETALHES
                        echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modalExemplo" . $row['Id'] . "'>";
                        echo "Detalhes";
                        echo "</button>";

                        echo "<button type='button' class='ml-3 btn btn-danger' data-toggle='modal' data-target='#modaldeletar" . $row['Id'] . "'>";
                        echo "Deletar";
                        echo "</button>";

                        // Modal Detalhes
                        echo "<div class='modal fade' id='modalExemplo" . $row['Id'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                        echo "<div class='modal-dialog' role='document'>";
                        echo "<div class='modal-content'>";
                        echo "<div class='modal-header'>";
                        echo "<h5 class='modal-title' id='exampleModalLabel'>Detalhes da avaliação:</h5>";
                        echo "<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>";
                        echo "<span aria-hidden='true'>&times;</span>";
                        echo "</button>";
                        echo "</div>";
                        echo "<div class='modal-body'>";

                        $nomeAutor = Avalia::ObterNomeAutor($row['autor_id']);
                        $nomePrestador = Avalia::ObterNomePrestador($row['avaliado_id']);
                        echo "<p>ID: " . $row['Id'] . "</p>";
                        echo "<p>Autor: " . $nomeAutor . "</p>";
                        echo "<p>Prestador Avaliado: " . $nomePrestador . "</p>";
                        echo "<p>Título: " . $row['Titulo'] . "</p>";
                        echo "<p>Nota: " . $row['Nota'] . "/10" . "</p>";
                        echo "<p>Descrição: " . $row['Descricao'] . "</p>";

                        echo "</div>";
                        echo "<div class='modal-footer'>";
                        echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        //FIM MODAL DETALHES

                        //MODAL DELETAR
                        echo "<div class='modal fade' id='modaldeletar" . $row['Id'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                        echo "<div class='modal-dialog' role='document'>";
                        echo "<div class='modal-content'>";
                        echo "<div class='modal-header'>";
                        echo "<h5 class='modal-title' id='exampleModalLabel'>Deletar o Serviço</h5>";
                        echo "<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>";
                        echo "<span aria-hidden='true'>&times;</span>";
                        echo "</button>";
                        echo "</div>";

                        echo "<div class='modal-body'>";
                        echo "<p>Tem certeza de que deseja excluir este serviço?</p>";
                        echo "</div>";
                        echo "<div class='modal-footer'>";
                        echo "<form action='' method='post'>";
                        echo "<input type='hidden' name='id_servico' value='".$row['Id']."'>";
                        echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>";
                        echo "<button type='submit' class='btn btn-danger' name='confirmarExclusao'>Confirmar</button>";
                        echo "</form>";
                        
                        echo "</div>";

                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        //FIM MODAL DELETAR
                    }
                } else {
                    echo "<tr><td colspan='6'>Nenhuma avaliação feita.</td></tr>";
                }

                ?>
            </tbody>
        </table>

    </div>
</div>
</div>
        </div>
</section>
