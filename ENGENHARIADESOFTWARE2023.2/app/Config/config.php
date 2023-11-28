<?php

namespace App\Config;

use mysqli;

class Conexao
{
    function conectarBancoDeDados()
    {
        $dbhost = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'teste';

        $conexao = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);

        if ($conexao->connect_errno) {
            die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
        }

        return $conexao;
    }
}
