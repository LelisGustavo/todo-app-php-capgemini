<?php
// Contém as classes responsáveis pelos modelos de dados do sistema ToDo App
namespace Src\Model;


// Declaração de uso das classes necessárias para o arquivo ProjetoDAO
use Src\Model\Conexao;
use Src\Model\SQL\ProjetoSQL;
use Src\VO\ProjetoVO;

// Classe que estende a classe Conexao e implementa as operações de acesso a dados relacionadas ao CRUD do sistema ToDo App
class ProjetoDAO extends Conexao
{

    private $conexao;

    // Método construtor, que estabelece uma conexão com o banco de dados ao instanciar um objeto 
    public function __construct()
    {

        $this->conexao = parent::retornarConexao();

    }

    // Método CadastrarProjetoDAO, que cadastra um novo projeto no banco de dados
    public function CadastrarProjetoDAO(ProjetoVO $vo): int 
    {

        $sql = $this->conexao->prepare(ProjetoSQL::INSERIR_PROJETO());
        $i = 1;
        $sql->bindValue($i++, $vo->getNome());
        $sql->bindValue($i++, $vo->getDescricao());

        try {

            $sql->execute();
            return 1;

        } catch (\Exception $ex) {

            echo $ex->getMessage();
            return -1;

        }

    }
    
    // Método AlterarProjetoDAO, que altera um projeto já inserido no banco de dados
    public function AlterarProjetoDAO(ProjetoVO $vo): int 
    {

        $sql = $this->conexao->prepare(ProjetoSQL::ALTERAR_PROJETO());
        $i = 1;
        $sql->bindValue($i++, $vo->getNome());
        $sql->bindValue($i++, $vo->getDescricao());
        $sql->bindValue($i++, $vo->getId());
        
        try {

            $sql->execute();
            return 1;

        } catch (\Exception $ex) {

            echo $ex->getMessage();
            return -1;

        } 

    }

    // Método ConsultarProjetoDAO, que consulta os projeto já inseridos no banco de dados
    public function ConsultarProjetoDAO(): array
    {

        $sql = $this->conexao->prepare(ProjetoSQL::CONSULTAR_PROJETO());
        $sql->execute();

        return $sql->fetchAll(\PDO::FETCH_ASSOC);

    }

    // Método ExcluirProjetoDAO, que exclui um projeto já inserido no banco de dados
    public function ExcluirProjetoDAO(ProjetoVO $vo): int 
    {

        $sql = $this->conexao->prepare(ProjetoSQL::EXCLUIR_PROJETO());
        $i = 1;
        $sql->bindValue($i++, $vo->getId());

        try {

            $sql->execute();
            return 1;

        } catch (\Exception $ex) {

            echo $ex->getMessage();
            return -2;

        }

    }

}