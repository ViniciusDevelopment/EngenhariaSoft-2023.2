<?php
require_once '..\..\..\app\Controller\Pages\Autenticacao.php';
use \App\Controller\Pages\Autenticacao;
$Autenticacao = new Autenticacao;

// Chame o método de logout
$Autenticacao->Logout();
