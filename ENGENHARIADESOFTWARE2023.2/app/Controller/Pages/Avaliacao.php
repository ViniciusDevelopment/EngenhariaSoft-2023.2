<?php

namespace App\Controller\Pages;

require_once __DIR__ . '/../../Config/config.php';
require __DIR__ . '/../../../vendor/autoload.php';

use \App\Utils\View;
use \App\Config\Conexao;

class Avalia
{
    public static function FazerAvaliacao($titulo, $nota, $descricao, $id_autor, $id_avaliado)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();

        $sql = "INSERT INTO avaliacoes (Titulo, Nota, Descricao, autor_id, avaliado_id) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conectado->prepare($sql);
        $stmt->bind_param("sisii", $titulo, $nota, $descricao, $id_autor, $id_avaliado);


        if ($stmt->execute()) {
            return true; // Inserção bem-sucedida
        } else {
            return false; // Erro na inserção
        }
    }

    public static function ConsultarAvaliacoes($id_autor, $id_avaliadoX)
{
    $conexao = new Conexao;
    $conectado = $conexao->conectarBancoDeDados();

    $sql = "SELECT * FROM avaliacoes WHERE autor_id = ? OR avaliado_id = ?";
    $stmt = $conectado->prepare($sql);
    $stmt->bind_param("ii", $id_autor, $id_avaliadoX);

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

public static function ExcluirServico($idServico)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();

        $sql = "DELETE FROM avaliacoes WHERE Id = ?";
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

    public static function ObterNomeAutor($autor_id)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();

        $sql = "SELECT Nome FROM usuarios WHERE Id = ?";
        $stmt = $conectado->prepare($sql);
        $stmt->bind_param("i", $autor_id);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row['Nome']; // Retorna o nome do prestador
            } else {
                return "Autor não encontrado";
            }
        } else {
            return "Erro na consulta";
        }
    }

    public static function ObterNomePrestador($avaliado_id)
{
    $conexao = new Conexao;
    $conectado = $conexao->conectarBancoDeDados();

    $sql = "SELECT Nome FROM usuarios WHERE Id = ?";
    $stmt = $conectado->prepare($sql);
    $stmt->bind_param("i", $avaliado_id);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['Nome']; // Retorna o nome do prestador
        } else {
            return "Prestador não encontrado";
        }
    } else {
        return "Erro na consulta";
    }
}
    
}
