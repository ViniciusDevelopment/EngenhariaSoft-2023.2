<?php
require_once '..\..\..\app\Controller\Pages\Autenticacao.php';

use \App\Controller\Pages\Autenticacao;

require '..\..\..\vendor\autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$Autenticacao = new Autenticacao;
$token_decode = new JWT();
$token = null;
if ($_COOKIE['token']) {
    $token = $_COOKIE['token'];
}

if ($token == null) {
    // Redireciona o usuário para a página de login
    header("Location: Login.php");
    exit();
}

// echo $token;
$chaveSecreta = 'sua_chave_secreta';
$decoded = JWT::decode($token, new Key($chaveSecreta, 'HS256'));


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

    <header>

        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <img src="..\Assets\logo.png" alt="Logo da Empresa" width="100" height="100">
                    <strong>Skillsync</strong>
                </a>
                <!--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">-->
                <!--                <span class="navbar-toggler-icon"></span>-->
                <!--                <button type="button" class="btn btn-primary">Primary</button>-->
                <!--            </button>-->
                <div class="navbar-toggler" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <a href="Logout.php" id="logoutLink">
                        <button type="button" class="btn btn-primary">Logout</button>
                    </a>
                </div>



            </div>
        </div>
    </header>


    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <!-- <h1 class="jumbotron-heading">Album example</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
            <p> -->
                <?php
                if ($decoded->nivel == 1) {
                    echo '<a href="page.php?arquivo=CadastrarServiço&id=" class="btn btn-primary my-2">Meus Serviços</a>';
                    echo '<a href="page.php?arquivo=Home&id=" class="btn btn-secondary my-2">Buscar um serviço</a>';
                }
                ?>
                </p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <?php
                $arquivo = $_GET["arquivo"] ?? "Home";


                if (file_exists($arquivo . ".php")) {
                    include $arquivo . ".php";
                } else {
                    include "Home.php";
                }

                ?>


            </div>
        </div>
    </main>

  
<footer class="container py-5">
    <div class="row">

        <div class="col-6 col-md">
            <h5>Contato</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Numero</a></li>
                <li><a class="text-muted" href="#">Email</a></li>
                <li><a class="text-muted" href="#">Instagram</a></li>
                <li><a class="text-muted" href="#">Etc</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Ajuda</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Forum</a></li>
                <li><a class="text-muted" href="#">Atendimento</a></li>
                <li><a class="text-muted" href="#">Etc</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Sobre</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Equipe</a></li>
                <li><a class="text-muted" href="#">Localizações</a></li>
                <li><a class="text-muted" href="#">Privacidade</a></li>
                <li><a class="text-muted" href="#">Termos</a></li>
            </ul>
        </div>
    </div>
</footer>


</body>

</html>
