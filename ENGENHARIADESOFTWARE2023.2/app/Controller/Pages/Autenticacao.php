<?php

namespace App\Controller\Pages;
require_once __DIR__ . '/../../Config/config.php';
require __DIR__ . '/../../../vendor/autoload.php';
use \App\Utils\View;
use \App\Config\Conexao;
use Firebase\JWT\JWT;

class Autenticacao
{
    public static function getLogin()
    {
        return View::render('Pages/Login.php',[
            'name' => 'Tela Login',
            'description' => 'Entre com seus dados',
        ]);
    }

    public function CadastrarUsuario($nome, $email, $senha,$confirmarsenha, $nivel, $cpf, $rg, $telefone, $endereco)
    {
        // Hash da senha antes de armazená-la no banco
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();

        $sql = "INSERT INTO usuarios (nome, email, senha, nivel, cpf, rg, telefone, endereco) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conectado->prepare($sql);
        $nivel = $nivel ? 1 : 0;
        $stmt->bind_param("sssissss", $nome, $email, $senhaHash, $nivel, $cpf, $rg, $telefone, $endereco);

        if ($stmt->execute()) {
            return true; // Inserção bem-sucedida
        } else {
            return false; // Erro na inserção
        }
    }

    public function Login($email, $senha)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();

        $sql = "SELECT * FROM usuarios WHERE BINARY email = ?";
        $stmt = $conectado->prepare($sql);
        $stmt->bind_param("s", $email);

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $senhaHash = $row['Senha'];

            // Verifique se a senha fornecida coincide com a senha no banco de dados
            if (password_verify($senha, $senhaHash)) {
                $payload = array(
                    "id" => $row['Id'],
                    "email" => $row['Email'],
                    "nome" => $row['Nome'],
                    "nivel" => $row['Nivel'],
                );
                $chaveSecreta = 'sua_chave_secreta';
                $token = JWT::encode($payload, $chaveSecreta, 'HS256');

                setcookie('token', $token, time() + 3600, '/');

                header("Location: ../../View/pages/Layout.php");

                return true;

            }
        }

        // Falha ao autenticar
        return false;
    }


    public function Logout()
    {
        if (isset($_COOKIE['token'])) {
            unset($_COOKIE['token']);
            setcookie('token', null, -1, '/');
        }

        header("Location: ../../View/pages/Login.php");
    }

    public function ObterDadosUser($id)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();
         // Consulta SQL para obter os dados do usuário com base no ID
    $sql = "SELECT * FROM usuarios WHERE id = ?";
    $stmt = $conectado->prepare($sql);
    $stmt->bind_param("i", $id);

    // Executa a consulta
    $stmt->execute();

    // Obtém o resultado da consulta
    $result = $stmt->get_result();


    // Verifica se há algum resultado
    if ($result->num_rows > 0) {
        // Obtém os dados do usuário
        $dadosUsuario = $result->fetch_assoc();
        // Agora você pode retornar os dados do usuário
        return $dadosUsuario;
    } else {
        // Se nenhum usuário for encontrado, você pode retornar um valor padrão ou lançar uma exceção, dependendo da sua lógica.
        return null;
    }


    }

    public function AlterarUser($id, $nome, $email, $nivel, $cpf, $rg, $telefone, $endereco)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();
    
        // Consulta SQL de atualização
        $sql = "UPDATE usuarios 
                SET Nome = ?, Email = ?, Nivel = ?, cpf = ?, rg = ?, telefone = ?, endereco = ?
                WHERE Id = ?";
    
        $stmt = $conectado->prepare($sql);
        $stmt->bind_param("ssissssi", $nome, $email, $nivel, $cpf, $rg, $telefone, $endereco, $id);
        
        if ($stmt->execute()) {
            // Verifique se algum registro foi afetado (ou seja, se a atualização foi bem-sucedida)
            if ($stmt->affected_rows > 0) {
                return 1; // Sucesso
            } else {
                return -1; // Nenhum registro foi atualizado (talvez o ID não exista)
            }
        } else {
            return 0; // Erro na execução da consulta SQL
        }
    }
    


}

