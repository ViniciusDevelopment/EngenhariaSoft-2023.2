<section id="sectionformal" class="clearfix">
    <div class="container">

        <div class="hero-info">
            <div class="container mt-5">
                <?php
                require_once '..\..\..\app\Controller\Pages\Servicos.php';

                use \App\Controller\Pages\Servico;

                $Servico = new Servico;

                $resultado = null;

                if (isset($_POST['pesquisa'])) {
                    $pesquisa = $_POST['pesquisa'];
                    $id_solicitador = $decoded->id;
                    $resultado = $Servico->PesquisarSolicitacoesPrestador($id_solicitador, $pesquisa);
                }

                if (isset($_POST['nomeServico'])) {
                    $nome = $_POST['nomeServico'];
                    $valor = $_POST['valorServico'];
                    $descricao = $_POST['descricaoServico'];
                    $id_solicitador = $decoded->id;

                    $retornoCadastroServico = $Servico->SolicitarServiço($nome, $valor, $descricao, $id_solicitador);

                    echo '<div class="d-flex justify-content-center mt-3">';

                    if ($retornoCadastroServico) {
                        // Redireciona para a mesma página com um parâmetro "success"
                        header('Location: Layout.php?arquivo=CadastrarServiço&id=&success=true');
                    } else {
                        // Mensagem de erro (vermelho)
                        echo '<div class="alert alert-danger mt-3 w-50">
                <strong>Erro:</strong> Erro ao cadastrar serviço.
              </div>';
                    }

                    echo '</div>';
                }

                if (isset($_POST['confirmarExclusao'])) {
                    $idServico = $_POST['id_servico'];
                    $retornoExclusaoServico = $Servico->ExcluirSolicitacao($idServico);

                    // Verifique o retorno da função e exiba uma mensagem correspondente
                    if ($retornoExclusaoServico === 1) {
                        echo '<div class="alert alert-success" role="alert">Serviço excluído com sucesso!</div>';
                    } elseif ($retornoExclusaoServico === -1) {
                        echo '<div class="alert alert-danger" role="alert">O serviço não foi encontrado.</div>';
                    } elseif ($retornoExclusaoServico === 0) {
                        echo '<div class="alert alert-danger" role="alert">Erro ao excluir o serviço.</div>';
                    }
                }

                if (isset($_POST['confirmarAlteracao'])) {
                    $nome = $_POST['nome'];
                    $valor = $_POST['valor'];
                    $descricao = $_POST['descricao'];
                    $disponibilidade = $_POST['disponibilidade'];
                    $id = $_POST['id'];

                    $retornoAlteracaoServico = $Servico->AlterarSolicitacao($id, $nome, $valor, $descricao, $disponibilidade);


                    // Verifique o retorno da função e exiba uma mensagem correspondente
                    if ($retornoAlteracaoServico === 1) {
                        echo '<div class="alert alert-success" role="alert">Serviço alterado com sucesso!</div>';
                    } elseif ($retornoAlteracaoServico === -1) {
                        echo '<div class="alert alert-danger" role="alert">O serviço não foi encontrado.</div>';
                    } elseif ($retornoAlteracaoServico === 0) {
                        echo '<div class="alert alert-danger" role="alert">Erro ao alterar o serviço.</div>';
                    }
                }

                ?>
                <h1>Solicitação de serviço</h1>
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nomeServico" class="form-label">Nome do Serviço</label>
                        <input type="text" class="form-control" id="nomeServico" name="nomeServico" required>
                    </div>
                    <div class="mb-3">
                        <label for="valorServico" class="form-label">Valor do Serviço</label>
                        <input type="number" class="form-control" id="valorServico" name="valorServico" required>
                    </div>
                    <div class="mb-3">
                        <label for="descricaoServico" class="form-label">Descrição do Serviço</label>
                        <textarea class="form-control" id="descricaoServico" name="descricaoServico" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Solicitar</button>
                </form>

                <br>
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" value="<?= $_POST["pesquisa"] ?? "" ?>" id="pesquisa" name="pesquisa" class="form-control" placeholder="Pesquisar..." aria-label="Pesquisar" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Pesquisar</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="">
                <div class=" p-3">
                    <h2>Minha Lista de Serviços</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Valor</th>
                                    <th>Descrição</th>
                                    <th>Disponibilidade</th>
                                    <th style="width: 1000px;">Ações</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($_POST['pesquisa']) && !empty($_POST['pesquisa'])) {
                                    if ($resultado->num_rows > 0) {
                                        // Exibe os dados na tabela
                                        while ($row = $resultado->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $row['Id'] . "</td>";
                                            echo "<td>" . $row['Nome'] . "</td>";
                                            echo "<td>R$" . number_format($row['Valor'], 2, ',', '.') . "</td>";
                                            echo "<td>" . $row['Descricao'] . "</td>";
                                            echo "<td>";
                                            if ($row['disponibilidade'] == 1) {
                                                echo '<strong><span class="text-success">Disponível</span></strong>'; // Verde para disponível
                                            } else {
                                                echo '<strong><span class="text-danger">Indisponível</span></strong>'; // Vermelho para indisponível
                                            }

                                            echo "</td>";

                                            echo "<td>";
                                            // Botão para acionar modal DETALHES
                                            echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modalExemplo" . $row['Id'] . "'>";
                                            echo "Detalhes";
                                            echo "</button>";

                                            echo "<button type='button' class='ml-3 btn btn-warning' data-toggle='modal' data-target='#modalalterar" . $row['Id'] . "'>";
                                            echo "Alterar";
                                            echo "</button>";

                                            echo "<button type='button' class='ml-3 btn btn-danger' data-toggle='modal' data-target='#modaldeletar" . $row['Id'] . "'>";
                                            echo "Deletar";
                                            echo "</button>";

                                            // Modal Detalhes
                                            echo "<div class='modal fade' id='modalExemplo" . $row['Id'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                                            echo "<div class='modal-dialog' role='document'>";
                                            echo "<div class='modal-content'>";
                                            echo "<div class='modal-header'>";
                                            echo "<h5 class='modal-title' id='exampleModalLabel'>Detalhes do Serviço:</h5>";
                                            echo "<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>";
                                            echo "<span aria-hidden='true'>&times;</span>";
                                            echo "</button>";
                                            echo "</div>";
                                            echo "<div class='modal-body'>";

                                            $nomePrestador = Servico::ObterNomeSolicitador($row['solicitador_id']);
                                            echo "<p>Aqui está todos os dados do serviço desde a sua última alteração:</p>";
                                            echo "<p>ID: " . $row['Id'] . "</p>";
                                            echo "<p>Serviço: " . $row['Nome'] . "</p>";
                                            echo "<p>Preço: R$" . $row['Valor'] . "</p>";
                                            echo "<p>Descrição: " . $row['Descricao'] . "</p>";
                                            echo "<p>Prestador: " . $nomePrestador . "</p>";
                                            echo "<p>Disponibilidade: Está visível para o público</p>";

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
                                            echo "<input type='hidden' name='id_servico' value='" . $row['Id'] . "'>";
                                            echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>";
                                            echo "<button type='submit' class='btn btn-danger' name='confirmarExclusao'>Confirmar</button>";
                                            echo "</form>";

                                            echo "</div>";

                                            echo "</div>";
                                            echo "</div>";
                                            echo "</div>";
                                            //FIM MODAL DELETAR

                                            //MODAL ALTERAR
                                            echo "<div class='modal fade' id='modalalterar" . $row['Id'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                                            echo "<div class='modal-dialog' role='document'>";
                                            echo "<div class='modal-content'>";
                                            echo "<div class='modal-header'>";
                                            echo "<h5 class='modal-title' id='exampleModalLabel'>Alterar o Serviço</h5>";
                                            echo "<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>";
                                            echo "<span aria-hidden='true'>&times;</span>";
                                            echo "</button>";
                                            echo "</div>";

                                            echo "<div class='modal-body'>";
                                            echo "<form action='' method='post'>";
                                            echo "<input type='hidden' name='id' value='" . $row['Id'] . "'>";

                                            // Input para o Nome
                                            echo "<div class='form-group'>";
                                            echo "<label for='nome'>Nome:</label>";
                                            echo "<input type='text' class='form-control' id='nome' name='nome' value='" . $row['Nome'] . "'>";
                                            echo "</div>";

                                            // Input para o Valor
                                            echo "<div class='form-group'>";
                                            echo "<label for='valor'>Valor:</label>";
                                            echo "<input type='text' class='form-control' id='valor' name='valor' value='" . $row['Valor'] . "'>";
                                            echo "</div>";

                                            // Input para a Descrição
                                            echo "<div class='form-group'>";
                                            echo "<label for='descricao'>Descrição:</label>";
                                            echo "<textarea class='form-control' id='descricao' name='descricao'>" . $row['Descricao'] . "</textarea>";
                                            echo "</div>";

                                            // Input para a Disponibilidade
                                            echo "<div class='form-group'>";
                                            echo "<label for='disponibilidade'>Disponibilidade:</label>";
                                            echo "<select class='form-control' id='disponibilidade' name='disponibilidade'>";
                                            echo "<option value='1' " . ($row['disponibilidade'] == 1 ? 'selected' : '') . ">Disponível</option>";
                                            echo "<option value='0' " . ($row['disponibilidade'] == 0 ? 'selected' : '') . ">Indisponível</option>";
                                            echo "</select>";
                                            echo "</div>";

                                            echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar Alteração</button>";
                                            echo "<button type='submit' class='ml-3 btn btn-success' name='confirmarAlteracao'>Confirmar Alterções</button>";
                                            echo "</form>";
                                            echo "</div>";


                                            echo "</div>";

                                            echo "</div>";
                                            echo "</div>";
                                            echo "</div>";
                                            //FIM MODAL ALTERAR

                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>Nenhum serviço cadastrado.</td></tr>";
                                    }
                                } else {
                                    $result = $Servico->ConsultarServicosSolicitados($decoded->id);

                                    if ($result->num_rows > 0) {
                                        // Exibe os dados na tabela
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $row['Id'] . "</td>";
                                            echo "<td>" . $row['Nome'] . "</td>";
                                            echo "<td>R$" . number_format($row['Valor'], 2, ',', '.') . "</td>";
                                            echo "<td>" . $row['Descricao'] . "</td>";
                                            echo "<td>";
                                            if ($row['disponibilidade'] == 1) {
                                                echo '<strong><span class="text-success">Disponível</span></strong>'; // Verde para disponível
                                            } else {
                                                echo '<strong><span class="text-danger">Indisponível</span></strong>'; // Vermelho para indisponível
                                            }

                                            echo "</td>";

                                            echo "<td class='col-auto'>";
                                            // Botão para acionar modal DETALHES
                                            echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modalExemplo" . $row['Id'] . "'>";
                                            echo "Detalhes";
                                            echo "</button>";

                                            echo "<button type='button' class='ml-3 btn btn-warning' data-toggle='modal' data-target='#modalalterar" . $row['Id'] . "'>";
                                            echo "Alterar";
                                            echo "</button>";

                                            echo "<button type='button' class='ml-3 btn btn-danger' data-toggle='modal' data-target='#modaldeletar" . $row['Id'] . "'>";
                                            echo "Deletar";
                                            echo "</button>";

                                            // Modal Detalhes
                                            echo "<div class='modal fade' id='modalExemplo" . $row['Id'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                                            echo "<div class='modal-dialog' role='document'>";
                                            echo "<div class='modal-content'>";
                                            echo "<div class='modal-header'>";
                                            echo "<h5 class='modal-title' id='exampleModalLabel'>Detalhes do Serviço:</h5>";
                                            echo "<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>";
                                            echo "<span aria-hidden='true'>&times;</span>";
                                            echo "</button>";
                                            echo "</div>";
                                            echo "<div class='modal-body'>";

                                            $nomePrestador = Servico::ObterNomeSolicitador($row['solicitador_id']);
                                            echo "<p>Aqui está todos os dados do serviço desde a sua última alteração:</p>";
                                            echo "<p>ID: " . $row['Id'] . "</p>";
                                            echo "<p>Serviço: " . $row['Nome'] . "</p>";
                                            echo "<p>Preço: R$" . $row['Valor'] . "</p>";
                                            echo "<p>Descrição: " . $row['Descricao'] . "</p>";
                                            echo "<p>Prestador: " . $nomePrestador . "</p>";
                                            echo "<p>Disponibilidade: Está visível para o público</p>";

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
                                            echo "<input type='hidden' name='id_servico' value='" . $row['Id'] . "'>";
                                            echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>";
                                            echo "<button type='submit' class='btn btn-danger' name='confirmarExclusao'>Confirmar</button>";
                                            echo "</form>";

                                            echo "</div>";

                                            echo "</div>";
                                            echo "</div>";
                                            echo "</div>";
                                            //FIM MODAL DELETAR

                                            //MODAL ALTERAR
                                            echo "<div class='modal fade' id='modalalterar" . $row['Id'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                                            echo "<div class='modal-dialog' role='document'>";
                                            echo "<div class='modal-content'>";
                                            echo "<div class='modal-header'>";
                                            echo "<h5 class='modal-title' id='exampleModalLabel'>Alterar o Serviço</h5>";
                                            echo "<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>";
                                            echo "<span aria-hidden='true'>&times;</span>";
                                            echo "</button>";
                                            echo "</div>";

                                            echo "<div class='modal-body'>";
                                            echo "<form action='' method='post'>";
                                            echo "<input type='hidden' name='id' value='" . $row['Id'] . "'>";

                                            // Input para o Nome
                                            echo "<div class='form-group'>";
                                            echo "<label for='nome'>Nome:</label>";
                                            echo "<input type='text' class='form-control' id='nome' name='nome' value='" . $row['Nome'] . "'>";
                                            echo "</div>";

                                            // Input para o Valor
                                            echo "<div class='form-group'>";
                                            echo "<label for='valor'>Valor:</label>";
                                            echo "<input type='text' class='form-control' id='valor' name='valor' value='" . $row['Valor'] . "'>";
                                            echo "</div>";

                                            // Input para a Descrição
                                            echo "<div class='form-group'>";
                                            echo "<label for='descricao'>Descrição:</label>";
                                            echo "<textarea class='form-control' id='descricao' name='descricao'>" . $row['Descricao'] . "</textarea>";
                                            echo "</div>";

                                            // Input para a Disponibilidade
                                            echo "<div class='form-group'>";
                                            echo "<label for='disponibilidade'>Disponibilidade:</label>";
                                            echo "<select class='form-control' id='disponibilidade' name='disponibilidade'>";
                                            echo "<option value='1' " . ($row['disponibilidade'] == 1 ? 'selected' : '') . ">Disponível</option>";
                                            echo "<option value='0' " . ($row['disponibilidade'] == 0 ? 'selected' : '') . ">Indisponível</option>";
                                            echo "</select>";
                                            echo "</div>";

                                            echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar Alteração</button>";
                                            echo "<button type='submit' class='ml-3 btn btn-success' name='confirmarAlteracao'>Confirmar Alterções</button>";
                                            echo "</form>";
                                            echo "</div>";


                                            echo "</div>";

                                            echo "</div>";
                                            echo "</div>";
                                            echo "</div>";
                                            //FIM MODAL ALTERAR

                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>Nenhum serviço cadastrado.</td></tr>";
                                    }
                                }


                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
</section>
