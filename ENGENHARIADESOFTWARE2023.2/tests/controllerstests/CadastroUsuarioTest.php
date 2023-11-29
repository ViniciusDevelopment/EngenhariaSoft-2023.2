<?php
// CadastroUsuarioTest.php
use PHPUnit\Framework\TestCase;
use \App\Controller\Pages\Autenticacao;

class CadastroUsuarioTest extends TestCase
{
    public function testCadastrarUsuario()
    {
        // Instancie a classe CadastroUsuario ou a classe que contém o método
        $cadastroUsuario = new Autenticacao();

        // Parâmetros de exemplo
        $nome = "John Doe";
        $email = "john.doe@example.com";
        $senha = "password123";
        $confirmarSenha = "password123";
        $nivel = 1;
        $cpf = "12345678901";
        $rg = "ABC123";
        $telefone = "123456789";
        $endereco = "123 Main St";

        // Chame o método e armazene o resultado
        $resultado = $cadastroUsuario->CadastrarUsuario(
            $nome,
            $email,
            $senha,
            $confirmarSenha,
            $nivel,
            $cpf,
            $rg,
            $telefone,
            $endereco
        );

        // Assert: Verifique se o resultado é verdadeiro
        $this->assertTrue($resultado);
    }
}


?>