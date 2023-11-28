<?php
require_once '..\..\..\app\Controller\Pages\Autenticacao.php';

use \App\Controller\Pages\Autenticacao;

$id_usuario = $_GET['id'];
$Autenticacao = new Autenticacao;

$dadosUsuario = $Autenticacao->ObterDadosUser($id_usuario);



if ($dadosUsuario !== null) {
    // Preencha o formulário com os dados do usuário
    $nome = $dadosUsuario['Nome'];
    $email = $dadosUsuario['Email'];
    $nivel = $dadosUsuario['Nivel'] ? $dadosUsuario['Nivel'] : 0;
    $cpf = $dadosUsuario['cpf'];
    $rg = $dadosUsuario['rg'];
    $telefone = $dadosUsuario['telefone'];
    $endereco = $dadosUsuario['endereco'];
}

?>



<section id="sectionformal" class="clearfix">
    <div class="container">
        <div class="hero-info">
            <div class="container mt-5">
                <?php
                if (isset($_POST['Email'])) {

                    $nome = $_POST['Nome'];
                    $email = $_POST['Email'];
                    $nivel = isset($_POST['Nivel']) ? 1 : 0;
                    $cpf = $_POST['cpf'];
                    $rg = $_POST['rg'];
                    $telefone = $_POST['telefone'];
                    $endereco = $_POST['endereco'];

                    $dadosAlteracao = $Autenticacao->AlterarUser($id_usuario, $nome, $email, $nivel, $cpf, $rg, $telefone, $endereco);
                    if ($dadosAlteracao === 1) {
                        echo '<div class="alert alert-success" role="alert">Usuario alterado com sucesso!</div>';
                    } elseif ($dadosAlteracao === -1) {
                        echo '<div class="alert alert-danger" role="alert">O Usuario não foi encontrado.</div>';
                    } elseif ($dadosAlteracao === 0) {
                        echo '<div class="alert alert-danger" role="alert">Erro ao alterar o Usuario.</div>';
                    }
                }

                ?>

                <form action="" method="POST">
                    <div class="form-group">
                        <label for="Nome">Nome:</label>
                        <input type="text" class="form-control" id="Nome" name="Nome" value="<?php echo $nome; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email:</label>
                        <input type="email" class="form-control" id="Email" name="Email" value="<?php echo $email; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF:</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $cpf; ?>" required oninput="formatCPF()">
                    </div>
                    <div class="form-group">
                        <label for="rg">RG:</label>
                        <input type="text" class="form-control" id="rg" name="rg" value="<?php echo $rg; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $telefone; ?>" required oninput="formatPhone()">
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <textarea class="form-control" id="endereco" name="endereco" rows="3" required><?php echo $endereco; ?></textarea>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="Nivel" name="Nivel" <?php echo $nivel == 1 ? 'checked' : ''; ?>>

                        <label class="form-check-label" for="Nivel">Sou um prestador de serviços</label>
                    </div>

                    <button type="submit" class="mt-3 btn btn-primary w-100">Alterar</button>
                </form>

            </div>
        </div>
    </div>
</section>