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

$id_usuario = $decoded->id;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicons -->
    <link href="../Assets/img home/favicon.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../Assets/utilitarios home/aos/aos.css" rel="stylesheet">
    <link href="../Assets/utilitarios home/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Assets/utilitarios home/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../Assets/css home/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">
            <div class="logo">
                <a href="Layout.php"><img src="../Assets/logo.png" alt="" class="img-fluid"></a>
                <h1><a href="Layout.php">Skillsync</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <?php
                        if ($decoded->nivel == 1) {
                            echo '<li><a class="nav-link scrollto active" href="Layout.php?arquivo=TelaInicial&id=">Home</a></li>';
                            echo '<li><a class="nav-link scrollto active" href="Layout.php?arquivo=Avaliar&id=">Minhas Avaliações</a></li>';
                            echo '<li><a class="nav-link scrollto" href="Layout.php?arquivo=Home&id=">Serviços</a></li>';
                            echo '<li><a class="nav-link scrollto" href="Layout.php?arquivo=Solicitacoes&id=">Solicitações</a></li>';
                            echo '<li><a class="nav-link scrollto" href="Layout.php?arquivo=CadastrarServiço&id=">Meus Serviços</a></li>';
                            echo '<li><a class="nav-link scrollto" href="Layout.php?arquivo=Dashboard&id=">Dashboard</a></li>';
                            echo '<li><a class="nav-link scrollto" href="Layout.php?arquivo=pagamentos&id=">Pagamentos</a></li>';
                        }
                        else {
                            echo '<li><a class="nav-link scrollto active" href="Layout.php?arquivo=TelaInicial&id=">Home</a></li>';
                            echo '<li><a class="nav-link scrollto active" href="Layout.php?arquivo=Avaliar&id=">Minhas Avaliações</a></li>';
                            echo '<li><a class="nav-link scrollto" href="Layout.php?arquivo=Serviços&id=">Serviços</a></li>';
                            echo '<li><a class="nav-link scrollto" href="Layout.php?arquivo=Solicitaçoes&id=">Solicitações</a></li>';
                            echo '<li><a class="nav-link scrollto" href="Layout.php?arquivo=SolicitarServiço&id=">Solicitar Serviço</a></li>';
                            echo '<li><a class="nav-link scrollto" href="Layout.php?arquivo=Dashboard&id=">Dashboard</a></li>';
                            echo '<li><a class="nav-link scrollto" href="Layout.php?arquivo=pagamentos&id=">Pagamentos</a></li>';
                        
                        }
                    ?>

                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person"></i> Usuário
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="Layout.php?arquivo=Perfil&id=<?php echo $id_usuario; ?>">Perfil</a></li>
                            <li><a class="dropdown-item" href="Logout.php">Sair/Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <?php
    $arquivo = $_GET["arquivo"] ?? "TelaInicial";


    if (file_exists($arquivo . ".php")) {
        include $arquivo . ".php";
    } else {
        include "Home.php";
    }

    ?>



    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Direitos Autorais <strong>Skillsync</strong>. Todos os direitos reservados.
            </div>
            <div class="credits">
                Desenvolvido por <a href="https://www.seusite.com/">Seu Nome ou Empresa</a>
            </div>
        </div>
    </footer><!-- End Footer -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../Assets/utilitarios home/purecounter/purecounter_vanilla.js"></script>
    <script src="../Assets/utilitarios home/aos/aos.js"></script>
    <script src="../Assets/utilitarios home/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../Assets/utilitarios home/glightbox/js/glightbox.min.js"></script>
    <script src="../Assets/utilitarios home/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../Assets/utilitarios home/swiper/swiper-bundle.min.js"></script>
    <script src="../Assets/utilitarios home/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../Assets/js home/main.js"></script>
</body>

</html>
