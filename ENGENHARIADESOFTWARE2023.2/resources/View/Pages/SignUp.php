<?php
    require_once '..\..\..\app\Controller\Pages\Autenticacao.php';
    use \App\Controller\Pages\Autenticacao;
    $Autenticacao = new Autenticacao;
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skyllsync - Cadastro</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex flex-column align-items-center">
                        <h2>Cadastro</h2>
                        <img src="..\Assets\logo.png" alt="Logo da Empresa" width="200" height="200">
                    </div>

                    <form action="SignUp.php" method="POST">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="email">CPF:</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" required oninput="formatCPF()">
                        </div>
                        <div class="form-group">
                            <label for="email">RG:</label>
                            <input type="text" class="form-control" id="rg" name="rg" required >
                        </div>
                        <div class="form-group">
                            <label for="email">Telefone:</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" required oninput="formatPhone()">
                        </div>
                        <div class="form-group">
                            <label for="email">Endereço:</label>
                            <textarea class="form-control" id="endereco" name="endereco" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha:</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmarSenha">Confirmar Senha:</label>
                            <input type="password" class="form-control" id="confirmarSenha" name="confirmarSenha" required>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="nivel" name="nivel">
                            <label class="form-check-label" for="sliderButton">Sou um prestador de serviços</label>
                        </div>
                        <button type="submit" class="mt-3 btn btn-primary w-100">Cadastrar</button>
                    </form>
                    <div class="d-flex flex-column align-items-center">
                        <p class="mt-3">Já tem uma conta? <a href="Login.php">Faça login</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
        // Função para formatar o CPF (###.###.###-##)
        function formatCPF() {
            let cpfInput = document.getElementById('cpf');
            let cpfValue = cpfInput.value.replace(/\D/g, ''); // Remove caracteres não numéricos
            cpfValue = cpfValue.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4'); // Formatação
            cpfInput.value = cpfValue;
        }


        // Função para formatar o telefone (## #####-####)
        function formatPhone() {
            let phoneInput = document.getElementById('telefone');
            let phoneValue = phoneInput.value.replace(/\D/g, ''); // Remove caracteres não numéricos
            phoneValue = phoneValue.replace(/(\d{2})(\d{5})(\d{4})/, '$1 $2-$3'); // Formatação
            phoneInput.value = phoneValue;
        }
    </script>
</body>
</html>

<?php
if(isset($_POST['email']))
{
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmarsenha = $_POST['confirmarSenha'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $nivel = isset($_POST['nivel']) ? 1 : 0;

    // Verificar se as senhas coincidem
    if ($senha !== $confirmarsenha) {
        echo '<div class="alert alert-danger mt-3 w-50">
                <strong>Erro:</strong> Senha e confirmar senha diferentes.
              </div>';
        return;
    }

    $retornoCadastroUsuario = $Autenticacao->CadastrarUsuario($nome, $email, $senha,$confirmarsenha, $nivel, $cpf, $rg, $telefone, $endereco);
    echo '<div class="d-flex justify-content-center mt-3">';
    if($retornoCadastroUsuario)
    {
        // Mensagem de sucesso (verde)
        echo '<div class="alert alert-success  w-50">
                <strong>Sucesso:</strong> Cadastro realizado com sucesso!
              </div>';
    }
    else
    {
        // Mensagem de erro (vermelho)
        echo '<div class="alert alert-danger mt-3 w-50">
                <strong>Erro:</strong> Ocorreu um erro durante o cadastro.
              </div>';
    }
    echo '</div>';
}
?>
