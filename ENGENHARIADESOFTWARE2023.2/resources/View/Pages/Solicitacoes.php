<?php
// require_once '..\..\..\app\Controller\Pages\Servicos.php';

use \App\Controller\Pages\Servico;

$Servico = new Servico;

if (isset($_POST['nomeServico'])) {
    $nome = $_POST['nomeServico'];
    $valor = $_POST['valorServico'];
    $descricao = $_POST['descricaoServico'];
    $status = $_POST['statusr'];
    $id_prestador = $decoded->id;

    echo '<div class="d-flex justify-content-center mt-3">';
    // Outras ações após a submissão do formulário
    echo '</div>';
}

if (isset($_POST['confirmarExclusao'])) {
    $idServico = $_POST['id_servico'];
    $retornoExclusaoServico = $Servico->ExcluirServico($idServico);

    // Verifique o retorno da função e exiba uma mensagem correspondente
    if ($retornoExclusaoServico === 1) {
        echo '<div class="alert alert-success" role="alert">Serviço excluído com sucesso!</div>';
    } elseif ($retornoExclusaoServico === -1) {
        echo '<div class="alert alert-danger" role="alert">O serviço não foi encontrado.</div>';
    } elseif ($retornoExclusaoServico === 0) {
        echo '<div class="alert alert-danger" role="alert">Erro ao excluir o serviço.</div>';
    }
}

if (isset($_POST['aprovarServico'])) {
    $idServico = $_POST['id_servico'];
    $status = 2; // Aprovar: 2
    $retornoAlterarStatus = $Servico->alterarstatusservico($idServico, $status);

    // Verifique o retorno da função e exiba uma mensagem correspondente
    if ($retornoAlterarStatus === true) {
        echo '<div class="alert alert-success" role="alert">Serviço aprovado com sucesso!</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Erro ao aprovar o serviço.</div>';
    }
}

if (isset($_POST['reprovarServico'])) {
    $idServico = $_POST['id_servico'];
    $status = 3; // Reprovar: 3
    $retornoAlterarStatus = $Servico->alterarstatusservico($idServico, $status);

    // Verifique o retorno da função e exiba uma mensagem correspondente
    if ($retornoAlterarStatus === true) {
        echo '<div class="alert alert-success" role="alert">Serviço reprovado com sucesso!</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Erro ao reprovar o serviço.</div>';
    }
}
?>

<!-- Código HTML com a tabela e os botões Aprovar e Reprovar -->



<!-- Código HTML com a tabela e os botões Aprovar e Reprovar -->
<section id="sectionformal" class="clearfix">
    <div class="container">
        <div class="hero-info">
            <div class="container mt-5">
                <div class="container p-3">
                    <div class="card p-3 table-responsive">
                        <h2>Serviços Solicitados</h2>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
                                </script>
                                <tr>
                                    <th>ID</th>
                                    <th>Descrição</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $resultado_solicitações = $Servico->ConsultarServicosSolicitados($decoded->id);

                                if ($resultado_solicitações !== null && $resultado_solicitações->num_rows > 0) {
                                    // Exibe os dados na tabela
                                    while ($row = $resultado_solicitações->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['descricao'] . "</td>";
                                        echo "<td>";
                                        if ($row['statusr'] == 0) {
                                            echo '<strong><span class="text-success">Em análise</span></strong>';
                                        } elseif ($row['statusr'] == 1) {
                                            echo '<strong><span class="text-warning">Em análise</span></strong>';
                                        } elseif ($row['statusr'] == 2) {
                                            echo '<strong><span class="text-success">Aprovado</span></strong>';
                                        } elseif ($row['statusr'] == 3) {
                                            echo '<strong><span class="text-danger">Cancelado</span></strong>';
                                        } else {
                                            echo '<strong><span class="text-danger">Serviço com Problema!</span></strong>';
                                        }
                                        echo "</td>";
                                        echo "<td class='col-auto'>";
                                        echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modalExemplo"
                                            . $row['id'] . "'>";
                                        echo "Detalhes";
                                        echo "</button>";

                                        if($decoded->id != $row['id_solicitante']){
                                        echo "<form action='' method='post'>"; // Defina o arquivo PHP apropriado no atributo action
                                        echo "<input type='hidden' name='id_servico' value='" . $row['id'] . "'>";
                                        echo "<button type='submit' name='aprovarServico' class='ml-3 btn btn-success'>";
                                        echo "Aprovar";
                                        echo "</button>";
                                        echo "<button type='submit' name='reprovarServico' class='ml-3 btn btn-danger'>";
                                        echo "Reprovar";
                                        echo "</button>";
                                        echo "</form>";
                                        }

                                        // echo "<button type='button' class='ml-3 btn btn-danger' data-toggle='modal' data-target='#modaldeletar"
                                        //     . $row['id'] . "'>";
                                        // echo "Deletar";
                                        echo "</button>";
                                        echo "</td>";

                                        // Modal Detalhes
                                        echo "<div class='modal fade' id='modalExemplo" . $row['id'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                                        echo "<div class='modal-dialog' role='document'>";
                                        echo "<div class='modal-content'>";
                                        echo "<div class='modal-header'>";
                                        echo "<h5 class='modal-title' id='exampleModalLabel'>Detalhes do Serviço:</h5>";
                                        echo "<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>";
                                        echo "<span aria-hidden='true'>&times;</span>";
                                        echo "</button>";
                                        echo "</div>";
                                        echo "<div class='modal-body'>";

                                        $nomePrestador = Servico::ObterNomePrestador($row['id_solicitante']);
                                        $dados_servicoss = Servico::ConsultarServicosId($row['id_servico']);

                                        if ($dados_servicoss !== null && $dados_servicoss->num_rows > 0) {
                                            $dados_servicoss = $dados_servicoss->fetch_assoc();
                                            echo "<p>Aqui estão todos os dados do serviço desde a sua última alteração:</p>";
                                            echo "<p>ID do serviço: " . $dados_servicoss['Id'] . "</p>";
                                            echo "<p>Prestador: " . $nomePrestador . "</p>";
                                            echo "<p>ID do Prestador: " . $dados_servicoss['prestador_id'] . "</p>"; // Sem o '$' no índice
                                            echo "<p>Serviço: " . $dados_servicoss['Nome'] . "</p>";
                                            echo "<p>Preço: R$" . $dados_servicoss['Valor'] . "</p>";
                                            echo "<p>Descrição: " . $dados_servicoss['Descricao'] . "</p>";

                                            if ($row['statusr'] == 0) {
                                                echo '<strong><span class="text-success">Em analíse</span></strong>'; // Verde para disponível
                                            } else {
                                                if ($row['statusr'] == 1) {
                                                    echo '<strong><span class="text-danger">Solicitação cancelada</span></strong>';
                                                } else {
                                                    if ($row['statusr'] == 2) {
                                                        echo '<strong><span class="text-success">Serviço em andamento</span></strong>'; // Verde para disponível
                                                    } else {
                                                        if ($row['statusr'] == 3) {
                                                            echo '<strong><span class="text-success">Serviço Concluído!</span></strong>'; // Verde para disponível
                                                        } else {
                                                            echo '<strong><span class="text-danger">Serviço com Problema!</span></strong>';
                                                        }
                                                    }
                                                }
                                            }

                                            if ($dados_servicoss['disponibilidade'] == 1) {
                                                echo '<strong><span class="text-success">Disponível</span></strong>'; // Verde para disponível
                                            } else {
                                                echo '<strong><span class="text-danger">Indisponível</span></strong>'; // Vermelho para indisponível
                                            }
                                        }


                                        echo "</div>";
                                        echo "<div class='modal-footer'>";
                                        echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</div>";
                                        //FIM MODAL DETALHES

                                        //MODAL DELETAR
                                        echo "<div class='modal fade' id='modaldeletar" . $row['id'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
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
                                        echo "<input type='hidden' name='id_servico' value='" . $row['id'] . "'>";
                                        echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>";
                                        echo "<button type='submit' class='btn btn-danger' name='confirmarExclusao'>Confirmar</button>";
                                        echo "</form>";

                                        echo "</div>";

                                        echo "</div>";
                                        echo "</div>";
                                        echo "</div>";
                                        //FIM MODAL DELETAR

                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='6'>Nenhum serviço solicitado.</td></tr>";
                                }

                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>