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
    <title>Skyllsync</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <!-- Centralize verticalmente -->
                    <div class="d-flex flex-column align-items-center">
                        <h2>Login</h2>
                        <img src="..\Assets\logo.png" alt="Logo da Empresa" width="200" height="200">
                    </div>
                        <form action="Login.php" method="POST">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <input type="password" class="form-control" id="senha" name="senha" required>
                            </div>
                            <button type="submit" class="mt-3 btn btn-primary w-100">Entrar</button>
                        </form>
                    <div class="d-flex flex-column align-items-center">
                        <p class="mt-3">Ainda não tem uma conta? <a href="SignUp.php">Cadastre-se</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


<?php
if(isset($_POST['email']))
{
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $retornoLoginUsuario = $Autenticacao->Login($email, $senha);
    echo '<div class="d-flex justify-content-center mt-3">';
    if($retornoLoginUsuario)
    {
        // Mensagem de sucesso (verde)
        echo '<div class="alert alert-success  w-50">
                <strong>Sucesso:</strong> Autenticação realizada com sucesso!
              </div>';
    }
    else
    {
        // Mensagem de erro (vermelho)
        echo '<div class="alert alert-danger mt-3 w-50">
                <strong>Erro:</strong> Email e/ou senha incorretos.
              </div>';
    }
    echo '</div>';
}
?>