<?php
use PHPUnit\Framework\TestCase;
// require_once '..\app\Controller\Pages\Servicos.php';
use \App\Controller\Pages\Servico;


class CadastroServicoTest extends TestCase
{
    public function testCadastrarServico()
    {
        $seuObjeto = new Servico();

        // Criar um usuário prestador para o teste
        $nomePrestador = "Prestador Teste";
        // Definir outros atributos do usuário prestador conforme necessário

        // Inserir o usuário prestador na tabela usuarios
        $idPrestador = $this->inserirUsuarioPrestador($nomePrestador);

        // Definir os parâmetros para o método CadastrarServiço
        $nomeServico = "Nome do Serviço";
        $valorServico = 50.00;
        $descricaoServico = "Descrição do Serviço";

        // Chamar o método CadastrarServiço
        $resultado = $seuObjeto->CadastrarServiço($nomeServico, $valorServico, $descricaoServico, $idPrestador);

        // Verificar se a inserção foi bem-sucedida
        $this->assertTrue($resultado);
    }

    // Método para inserir um usuário prestador no banco de dados de teste
    private function inserirUsuarioPrestador($nome)
    {
    }
}


?>
