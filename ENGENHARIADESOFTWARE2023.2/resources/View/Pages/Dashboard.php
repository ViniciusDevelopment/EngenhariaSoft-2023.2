<?php
require_once '..\..\..\app\Controller\Pages\Servicos.php';
use \App\Controller\Pages\Servico;

$Servico = new Servico;
// Substitua pela lógica adequada para obter o ID do usuário desejado
$idUsuario = 1;

// Realiza a consulta apenas se o ID do usuário estiver definido
if (isset($idUsuario)) {
    $totalGasto = $Servico->TotalGastoServicos($idUsuario);
} else {
    $totalGasto = 0;
}

echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Dashboard</title>';
// Adicione o link para o Chart.js
echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>';
echo '</head>';
echo '<body>';
echo '<section id="sectionformal" class="clearfix">';
echo '<div class="container">';
echo '<div class="hero-info">';
echo '<div class="container">';
// Adicione o título "Dashboard"
echo '<h1>Dashboard</h1>';
echo '<canvas id="myChart"></canvas>';
echo '</div>';
echo '<script>';
// Gere o código JavaScript com os dados obtidos do PHP
echo 'var totalGasto = 300;';
echo 'var ctx = document.getElementById("myChart").getContext("2d");';
echo 'var myChart = new Chart(ctx, {';
echo 'type: "bar",';
echo 'data: {';
echo 'labels: ["Total Gasto"],';
echo 'datasets: [{';
echo 'label: "Gastos",';
echo 'data: [totalGasto],';
echo 'backgroundColor: "rgba(75, 192, 192, 0.2)",';
echo 'borderColor: "rgba(75, 192, 192, 1)",';
echo 'borderWidth: 1';
echo '}]';
echo '},';
echo 'options: {';
echo 'scales: {';
echo 'y: {';
echo 'beginAtZero: true';
echo '}';
echo '}';
echo '}';
echo '});';
echo '</script>';
echo '</body>';
echo '</html>';
echo '</div>';
echo '</div>';
echo '</section>';
?>
