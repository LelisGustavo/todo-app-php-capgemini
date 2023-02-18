<?php
// Contém as classes responsáveis pelos modelos de dados do sistema
namespace Src\Model;

// Declaração de uso das classes necessárias para o arquivo TarefaDAO
use Src\Model\SQL\TarefaSQL;
use Src\VO\TarefaVO;
use Src\Model\Conexao;

// Classe que estende a classe Conexao e implementa as operações de acesso a dados relacionadas ao CRUD do sistema ToDo App
class TarefaDAO extends Conexao
{

    private $conexao;

    // Método construtor, que estabelece uma conexão com o banco de dados ao instanciar um objeto 
    public function __construct()
    {

        $this->conexao = parent::retornarConexao();

    }

    // Método CadastrarTarefaDAO, que cadastra uma nova tarefa no banco de dados
    public function CadastrarTarefaDAO(TarefaVO $vo): int 
    {

        $sql = $this->conexao->prepare(TarefaSQL::INSERIR_TAREFA());
        $i = 1;
        $sql->bindValue($i++, $vo->getNome());
        $sql->bindValue($i++, $vo->getPrazoFinal());
        $sql->bindValue($i++, $vo->getDescricao());
        $sql->bindValue($i++, $vo->getIdProjeto());

        try {

            $sql->execute();
            return 1;

        } catch (\Exception $ex) {

            echo $ex->getMessage();
            return -1;

        }

    }

    // Método AlterarTarefaDAO, que altera uma tarefa já inserida no banco de dados
    public function AlterarTarefaDAO(TarefaVO $vo): int 
    {

        $sql = $this->conexao->prepare(TarefaSQL::ALTERAR_TAREFA());
        $i = 1;
        $sql->bindValue($i++, $vo->getNome());
        $sql->bindValue($i++, $vo->getPrazoFinal());
        $sql->bindValue($i++, $vo->getDescricao());
        $sql->bindValue($i++, $vo->getIdProjeto());
        $sql->bindValue($i++, $vo->getId());

        try {

            $sql->execute();
            return 1;

        } catch (\Exception $ex) {

            echo $ex->getMessage();
            return -1;

        }

    }

    // Método ConsultarTarefaoDAO, que consulta as tarefas já inseridas no banco de dados
    public function ConsultarTarefaDAO(): array 
    {

        $sql = $this->conexao->prepare(TarefaSQL::CONSULTAR_TAREFA());
        $sql->execute();

        return $sql->fetchAll(\PDO::FETCH_ASSOC);

    }

    // Método ExcluirTarefaDAO, que exclui uma tarefa já inserida no banco de dados
    public function ExcluirTarefaDAO(TarefaVO $vo): int 
    {

        $sql = $this->conexao->prepare(TarefaSQL::EXCLUIR_TAREFA());
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