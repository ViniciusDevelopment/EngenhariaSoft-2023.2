<?php

namespace App\Controller\Pages;

require_once __DIR__ . '/../../Config/config.php';
require __DIR__ . '/../../../vendor/autoload.php';

use \App\Utils\View;
use \App\Config\Conexao;

class Pague
{
    public static function FazerCadastro($num, $titular, $validade, $cvv, $id_sol, $id_pagador)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();

        $sql = "INSERT INTO pagamentos (Numero, Titular, Validade, Cvv, id_sol, pagador_id) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conectado->prepare($sql);
        $stmt->bind_param("isiiii", $num, $titular, $validade, $cvv, $id_sol, $id_pagador);

        if ($stmt->execute()) {
            return true; // Inserção bem-sucedida
        } else {
            return false; // Erro na inserção
        }
    }

    public static function ConsultarPagamentos($id_pagador)
{
    $conexao = new Conexao;
    $conectado = $conexao->conectarBancoDeDados();

    $sql = "SELECT * FROM pagamentos WHERE pagador_id = ?";
    $stmt = $conectado->prepare($sql);
    $stmt->bind_param("i", $id_pagador);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        return $result;
    } else {
        return false;
    }
}

public static function ConsultaId($autor_id, $tituloAvalia)
{
    $conexao = new Conexao;
    $conectado = $conexao->conectarBancoDeDados();

    $sql = "SELECT avaliado_id FROM avaliacoes WHERE autor_id = ? AND Titulo = ?";
    $stmt = $conectado->prepare($sql);
    $stmt->bind_param("is", $autor_id, $tituloAvalia);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['avaliado_id']; // Retorna o valor de avaliado_id
        } else {
            return false; // Caso não encontre nenhum resultado
        }
    } else {
        return false; // Em caso de erro na consulta
    }
}

    public static function ObterNomePagador($pagador_id)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();

        $sql = "SELECT Nome FROM usuarios WHERE Id = ?";
        $stmt = $conectado->prepare($sql);
        $stmt->bind_param("i", $pagador_id);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row['Nome']; // Retorna o nome do pagador
            } else {
                return "Usúario não encontrado";
            }
        } else {
            return "Erro na consulta";
        }
    }

    public static function ExcluirServico($idServico)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();

        $sql = "DELETE FROM pagamentos WHERE Id = ?";
        $stmt = $conectado->prepare($sql);
        $stmt->bind_param("i", $idServico);

        // Execute a consulta SQL
        if ($stmt->execute()) {
            // Verifique se algum registro foi afetado (ou seja, se a exclusão foi bem-sucedida)
            if ($stmt->affected_rows > 0) {
                return 1;
            } else {
                return -1;
            }
        } else {
            return 0;
        }
    }
    
}
