<?php
require_once '..\..\..\app\Controller\Pages\pagado.php';

use \App\Controller\Pages\Pague;

$Pague = new Pague;

if (isset($_POST['numPague'])) {
    $num = $_POST['numPague'];
    $titular = $_POST['titularPague'];
    $validade = $_POST['validadePague'];
    $cvv = $_POST['cvvPague'];
    $id_sol = $_POST['id_sol'];
    $id_pagador = $decoded->id;

    $retornoCadastroCartao = $Pague->FazerCadastro($num, $titular, $validade, $cvv, $id_sol, $id_pagador);

    echo '<div class="d-flex justify-content-center mt-3">';

    if ($retornoCadastroCartao) {
        // Redireciona para a mesma página com um parâmetro "success"
        header('Location: Layout.php?arquivo=pagamentos&id=&success=true');
    } else {
        // Mensagem de erro (vermelho)
        echo '<div class="alert alert-danger mt-3 w-50">
                <strong>Erro:</strong> Erro ao realizar o pagamento.
              </div>';
    }

    echo '</div>';
}

if (isset($_POST['confirmarExclusao'])) {
    $idServico = $_POST['id_servico'];
    $retornoExclusaoServico = $Pague->ExcluirServico($idServico);

    // Verifique o retorno da função e exiba uma mensagem correspondente
    if ($retornoExclusaoServico === 1) {
        echo '<div class="alert alert-success" role="alert">Cartão excluído com sucesso!</div>';
    } elseif ($retornoExclusaoServico === -1) {
        echo '<div class="alert alert-danger" role="alert">O cartão não foi encontrado.</div>';
    } elseif ($retornoExclusaoServico === 0) {
        echo '<div class="alert alert-danger" role="alert">Erro ao excluir o cartão.</div>';
    }
}

?>
<section id="sectionformal" class="clearfix">
    <div class="container">

        <div class="hero-info">
<div class="container mt-5">
    <h1>Selecionar forma de pagamento:</h1>

     <!-- Imagens das bandeiras dos cartões -->
    <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
        <img src="../Assets/visa.png" alt="Visa" style="max-width: 50px; margin-right: 10px;">
        <img src="../Assets/mastercard.png" alt="Mastercard" style="max-width: 50px; margin-right: 10px;">
        <img src="../Assets/Amex.jpg" alt="American Express" style="max-width: 50px; margin-right: 10px;">
        <img src="../Assets/bb.png" alt="Banco do brasil" style="max-width: 50px; margin-right: 10px;">
        <img src="../Assets/hi.png" alt="Hipercard" style="max-width: 50px; margin-right: 10px;">
        <img src="../Assets/elo.jpg" alt="Elo" style="max-width: 50px; margin-right: 10px;">
        <!-- Adicione mais imagens conforme necessário -->
    </div>

    <!-- Opções de pagamento -->
    <p>Escolha o método de pagamento:</p>

    <input type="radio" id="cartao" name="metodo_pagamento" value="cartao" checked>
    <label for="cartao">Cartão de Crédito</label>
    <br>

    <input type="radio" id="boleto" name="metodo_pagamento" value="boleto">
    <label for="boleto">Boleto Bancário</label>
    <br>

    <input type="radio" id="pix" name="metodo_pagamento" value="pix">
    <label for="pix">PIX</label>
    <br>

    <button type="submit" class="btn btn-primary">Escolher</button>

    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="numPague" class="form-label">Número do cartão:</label>
            <input type="number" class="form-control" id="numPague" name="numPague" required>
        </div>
        <div class="mb-3">
            <label for="titularPague" class="form-label">Nome do Titular:</label>
            <input type="text" class="form-control" id="titularPague" name="titularPague" required>
        </div>
        <div class="mb-3">
           <label for="validadePague" class="form-label">Validade:</label>
           <input type="number" class="form-control" id="validadePague" name="validadePague" required>
        </div>
        <div class="mb-3">
           <label for="cvvPague" class="form-label">CVV:</label>
           <input type="number" class="form-control" id="cvvPague" name="cvvPague" required>
        </div>

        <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar cartão de crédito</button>
        </div>


    </form>
</div>

<div class="container p-3">
    <div class="card p-3 table-responsive">
        <h2>Meus cartões:</h2>
        <table class="table table-bordered table-hover">
            <thead>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                <tr>
                    <th>Titular:</th>
                    <th>Cartão:</th>
                    <th>Validade:</th>
                    <th>+</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $Pague->ConsultarPagamentos($decoded->id);


                if ($result->num_rows > 0) {
                    // Exibe os dados na tabela
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['Titular'] . "</td>";
                        echo "<td>" . $row['Numero'] . "</td>";
                        echo "<td>" . $row['Validade'] . "</td>";
                        
                        echo "<td class='col-auto'>";
                        // Botão para acionar modal DETALHES
                        echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modalExemplo" . $row['Id'] . "'>";
                        echo "Pagar";
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

                        echo "<p> Serviço pago! </p>";

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
                        echo "<h5 class='modal-title' id='exampleModalLabel'>Deletar cartão</h5>";
                        echo "<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>";
                        echo "<span aria-hidden='true'>&times;</span>";
                        echo "</button>";
                        echo "</div>";

                        echo "<div class='modal-body'>";
                        echo "<p>Tem certeza de que deseja excluir este cartão?</p>";
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
                    echo "<tr><td colspan='6'>Nenhum cartão cadastrado.</td></tr>";
                }

                ?>
            </tbody>
        </table>

    </div>
</div>
</div>
        </div>
</section>
